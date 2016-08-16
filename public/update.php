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
        $train_number = explode("+", $_POST["reserve_toupdate"])[0];
        $reservationid = explode("+", $_POST["reserve_toupdate"])[1];

        //check whether the reservation is already canceled
        $reserve = query("SELECT is_cancel FROM reservation WHERE reservationid = ?",
                            $reservationid);
        if (count($reserve) == 0) {
            apologize("invalid resrevation id");
        }
        else if ($reserve[0]["is_cancel"] == 1) {
            apologize("order already canceled");
        }
        else {
            $reserve = query("SELECT * FROM reserves WHERE reservationid = ? AND train_number = ?",
                                $reservationid,
                                $train_number);
            $reserve = $reserve[0];
            render("update_form.php", ["reserve" => $reserve,
                                        "title" => "Update Reservation"]);
        }

    }

?>
