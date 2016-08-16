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
        //check whether the reservation is already canceled
        query("UPDATE reserves
                        SET departure_date = ?
                        WHERE reservationid = ? AND train_number = ?",
                            $_POST["new_date"], $_POST["reservationid"], $_POST["train_number"]);


        $reserve = query("SELECT * FROM reserves WHERE reservationid = ? AND train_number = ?",
                            $_POST["reservationid"],
                            $_POST["train_number"]);
        $reserve = $reserve[0];
        render("updated_reserve.php", ["reserve" => $reserve,
                                    "title" => "Update Reservation"]);

    }

?>
