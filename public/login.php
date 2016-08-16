<?php

    // configuration
    require("../includes/config.php");

    // if user reached page via GET (as by clicking a link or via redirect)
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        // else render form
        render("login_form.php", ["title" => "Log In"]);
    }

    // else if user reached page via POST (as by submitting a form via POST)
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // validate submission
        if (empty($_POST["username"]))
        {
            apologize("You must provide your username.");
        }
        else if (empty($_POST["password"]))
        {
            apologize("You must provide your password.");
        }

        // query database for user
        $rows = query("SELECT * FROM users WHERE username = ?", $_POST["username"]);

        // if we found user, check password
        if (count($rows) == 1)
        {
            // first (and only) row
            $row = $rows[0];

            // compare hash of user's input against hash that's in database
			if (password_verify($_POST["password"], $row["password"]))
            {
                // remember that user's now logged in by storing user's ID in session
                $_SESSION["username"] = $row["username"];
                //check whether the user is customer or admin
                if (count(query("SELECT * FROM customer WHERE username = ?", $_POST["username"])) == 1) {
                    $_SESSION['manager'] = false;
                    $_SESSION["username"] = $row["username"];
                } else if (count(query("SELECT * FROM manager WHERE username = ?", $_POST["username"])) == 1){
                    $_SESSION['manager'] = true;
                    $_SESSION["username"] = $row["username"];
                } else {
                    apologize("Invalid username and/or password.");
                }
                $_SESSION["cart"] = array();
                $_SESSION["total_cost"] = 0;

                // redirect to portfolio
                redirect("/");
            }
        }

        // else apologize
        apologize("Invalid username and/or password.");
    }

?>
