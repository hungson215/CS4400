<?php

    // configuration
    require("../includes/config.php");

    // if user reached page via GET (as by clicking a link or via redirect)
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        // else render form
        render("verify_student_form.php", ["title" => "Verify Student"]);
    }

    // else if user reached page via POST (as by submitting a form via POST)
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        if (endsWith($_POST["school_email"], "edu") === false) {
            apologize("Invalid school email");
        } else {
            query("UPDATE customer SET is_student=1 WHERE username = ?",
                $_SESSION["username"]);
            print("student status verified");
        }
    }

?>
