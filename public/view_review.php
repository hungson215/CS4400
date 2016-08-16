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
    		render("ask_for_train.php", ["train_numbers" => $train_numbers, "title" => "Which Train?"]);
    }
    // else if user reached page via POST (as by submitting a form via POST)
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // query database for user
        $reviews = query("SELECT rating, comment FROM review WHERE train_number = ?", $_POST["trainNum"]);
        render("reviews.php", ["reviews" => $reviews, "title" => "Reviews"]);
    }

?>
