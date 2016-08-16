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

        $_SESSION["current_item"] = $_POST["order"];

    	if(empty($_SESSION["current_item"]))
    		redirect("/");
    	else
    		render("add_extra_form.php", ["title" => "Add extra"]);
    }

?>
