<?php

    // configuration
    require("../includes/config.php");

    // if user reached page via GET (as by clicking a link or via redirect)
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        $stations = query("SELECT * FROM station");

    	// render portfolio
    	if(empty($stations))
    		redirect("/");
    	else
    		render("search_route_form.php", ["stations" => $stations,
                                         "title" => "Search Train"]);
    }
    // else if user reached page via POST (as by submitting a form via POST)
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $depart_string = $_POST["depart_station"];
        $leftpos = strpos($depart_string, "(");
        $rightpos = strpos($depart_string, ")");
        $depart = substr($depart_string,  $leftpos + 1,
             $rightpos - $leftpos - 1);

        $arrival_string = $_POST["arrival_station"];
        $leftpos = strpos($arrival_string, "(");
        $rightpos = strpos($arrival_string, ")");
        $arrival = substr($arrival_string,  $leftpos + 1,
                    $rightpos - $leftpos - 1);

        $_SESSION["depart_station"] = $depart_string;
        $_SESSION["arrival_station"] = $arrival_string;

        //the train that's associated with the departure and arrival location
        $rows = query("SELECT * FROM stop_at WHERE train_number IN (
                            SELECT train_number
                            FROM stop_at
                            WHERE station_name = ? OR station_name = ?
                            GROUP BY train_number
                            HAVING COUNT(*) > 1
                        ) AND (station_name = ? OR station_name = ?)
                        ORDER BY train_number, arrival_time",
                        $depart, $arrival, $depart, $arrival);
        if (count($rows) > 0) {
            for ($i = 0; $i < count($rows); $i = $i + 2) {
                if ($rows[$i]["station_name"] == $depart
                    && $rows[$i + 1]["station_name"] == $arrival) {
                        $prices = query("SELECT *
                                        FROM train_route WHERE train_number = ?",
                                        $rows[$i]["train_number"]);
                        $start_time = strtotime($rows[$i]["depart_time"]);
                        $end_time = strtotime($rows[$i + 1]["arrival_time"]);
                        $duration = date('H:i:s', $end_time - $start_time);
                        $routes[$i/2] = [
                            "train_number" => $rows[$i]["train_number"],
                            "depart_time" => $rows[$i]["depart_time"],
                            "arrival_time" => $rows[$i + 1]["arrival_time"],
                            "duration" => $duration,
                            "first_price" => $prices[0]["first_class_price"],
                            "second_price" => $prices[0]["second_class_price"]
                        ];
                    }
            }
        } else {
            $routes = [["train_number" => "N/A",
                    "depart_time" => "N/A",
                    "arrival_time" => "N/A",
                    "duration" => "N/A",
                    "first_price" => "N/A",
                    "second_price" => "N/A"]];
        }
        render("select_price_form.php", ["routes" => $routes,
                                           "title" => "Train Schedule",
                                           "departure_date" => $_POST["departure_date"],
                                            "depart" => $_POST["depart_station"]]);
    }

?>
