<?php

    // configuration
    require("../includes/config.php");

    // if user reached page via GET (as by clicking a link or via redirect)
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        $rows = query("SELECT * FROM train_route");

    	foreach ($rows as $row)
    	{
            $train_numbers[] = [
                "train_number" => $row["train_number"]
            ];
    	}
    	// render portfolio
    	if(empty($train_numbers))
    		redirect("/");
    	else
    		render("select_train.php", ["train_numbers" => $train_numbers,
                                         "title" => "Select Train"]);
    }
    // else if user reached page via POST (as by submitting a form via POST)
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // query database for user
        $rows = query("SELECT station_name, arrival_time, depart_time FROM stop_at WHERE train_number = ? ORDER BY arrival_time",
                        $_POST["trainNum"]);
        render("train_schedule.php", ["train_number" => $_POST["trainNum"],
                                           "schedules" => $rows,
                                           "title" => "Train Schedule"]);
    }

?>
