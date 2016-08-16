<?php

    // configuration
    require("../includes/config.php");

    // if user reached page via GET (as by clicking a link or via redirect)
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        render("cancel_reservation_idsearch_form.php", ["title" => "Cancel Reservation"]);
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
            $total_cost = query("SELECT total_cost FROM reservation WHERE reservationid = ?", $_POST["reservationid"]);
            $total_cost = $total_cost[0]["total_cost"];
            $refund = $total_cost*0.8;
            render("cancel_reservation_form.php", [ "reservationid" => $_POST["reservationid"],
                                                    "total_cost" => $total_cost,
                                                    "refund" => $refund,
                                                    "reserves" => $reserves,
                                                    "title" => "Cancel Reservation"]);
        }

    }

?>
