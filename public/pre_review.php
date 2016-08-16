<?php

    // configuration
    require("../includes/config.php");


    //define contents to display in portfolio page

    $rows = query("SELECT * FROM train_route");

	foreach ($rows as $row)
	{
        $train_numbers[] = [
            "train_number" => $row["train_number"],
        ];
	}
	//echo($cash[0]["cash"]);
	// render portfolio
	if(empty($train_numbers))
	{
		redirect("/");
	}
	else
		render("review_form.php", ["train_numbers" => $train_numbers, "title" => "Review"]);
?>
