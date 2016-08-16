<?php

    // configuration
    require("../includes/config.php");

    // if user reached page via GET (as by clicking a link or via redirect)
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
    	redirect("/");
    }
    // else if user reached page via POST (as by submitting a form via POST)
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        query("INSERT INTO reservation(username, card_number, total_cost,departure_date)
                VALUES(?,?,?,?)",
                $_SESSION["username"], $_POST["card_num"], $_POST["total_cost"], $_SESSION["cart"][0]["departure_date"]);

        // generate reservation id
        $row = query("SELECT reservationid FROM reservation
                        ORDER BY reservationid DESC LIMIT 1");
        $reservationid = $row[0]["reservationid"];

        foreach ($_SESSION["cart"] as $ticket) {
            $time = $ticket["depart_time"]."-".$ticket["arrival_time"];
            query("INSERT INTO reserves(reservationid, train_number, class, depart_arrival_time, passenger_name, number_of_bags,
                                depart_from, arrive_at, price, departure_date)
                    VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?)",
                    $reservationid,
                    $ticket["train_number"],
                    $ticket["class"],
                    $time,
                    $ticket["passenger_name"],
                    $ticket["num_bag"],
                    $ticket["depart_station"],
                    $ticket["arrival_station"],
                    $ticket["price"],
                    $ticket["departure_date"]);
        }

        $_SESSION["cart"] = array();

    	render("confirmation_form.php", ["reservationid" => $reservationid]);
    }

?>
