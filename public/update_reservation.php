<?php

    // configuration
    require("../includes/config.php");

    // if user reached page via GET (as by clicking a link or via redirect)
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        render("update_reservation_idsearch_form.php", ["title" => "Cancel Reservation"]);
    }
    // else if user reached page via POST (as by submitting a form via POST)
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {

        // check whether the reservation is already canceled
        $reservation = query("SELECT is_cancel FROM reservation WHERE reservationid = ?", $_POST["reservationid"]);
        if (count($reservation) == 0) {
            apologize("invalid resrevation id");
        }
        else if ($reservation[0]["is_cancel"] == 1) {
            apologize("order already canceled");
        }
        else {
            $reserves = query("SELECT * FROM reserves WHERE reservationid = ?", $_POST["reservationid"]);
            render("select_reserve_toupdate_form.php", ["reserves" => $reserves,
                                                        "reservationid" => $_POST["reservationid"],
                                                    "title" => "Update Reservation"]);
        }

    }

?>
