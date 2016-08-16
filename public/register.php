<?php

    // configuration
    require("../includes/config.php");

    // if user reached page via GET (as by clicking a link or via redirect)
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        // else render form
        render("register_form.php", ["title" => "Register"]);
    }

    // else if user reached page via POST (as by submitting a form via POST)
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // validate submission
        if (empty($_POST["username"]))
        {
            apologize("You must provide a username");
        }
        else if (empty($_POST["password"]))
        {
            apologize("You must provide a password.");
        }
        else if ($_POST["password"] !== $_POST["confirmation"])
        {
            apologize("Password not matched");
        }

        // query database for new user registration
        if(query("INSERT INTO users (username, password) VALUES(?, ?)",
            $_POST["username"], password_hash($_POST["password"],PASSWORD_DEFAULT)) === false)
        {
            apologize("username already exist");
        }
        else {
            if (query("INSERT INTO customer(username, email, is_student) VALUES(?, ?, 0)",
                $_POST["username"], $_POST["email"]) === false) {
                    apologize("Register not successful");
            } else {
                    print("Register successful");
            }

        }
    }
?>
