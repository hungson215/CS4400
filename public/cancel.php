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

        // $reserves = query("SELECT * FROM reserves WHERE reservationid = ?", $_POST["reservationid"]);
        // $total_cost = query("SELECT total_cost FROM reservation WHERE reservationid = ?", $_POST["reservationid"]);
        // $total_cost = $total_cost[0]["total_cost"];
        // $refund = $total_cost*0.8;
        // render("cancel_reservation_form.php", [ "reservationid" => $_POST["reservationid"],
        //                                         "total_cost" => $total_cost,
        //                                         "refund" => $refund,
        //                                         "reserves" => $reserves,
        //                                         "title" => "Cancel Reservation"]);
        // recalculate balance
        $total_cost = $_POST["total_cost"] - $_POST["refund"];
        query("UPDATE reservation
               SET is_cancel = 1, total_cost = ?
               WHERE reservationid = ?", $total_cost, $_POST["reservationid"]);
        redirect("/");

    }

?>
