<?php

    // configuration
    require("../includes/config.php");

    // if user reached page via GET (as by clicking a link or via redirect)
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        $cards = query("SELECT card_number FROM payment_info WHERE username = ?", $_SESSION["username"]);
        if (count($cards) > 0) {
            render("payment_info_form.php", ["cards" => $cards, "title" => "Add extra"]);
        } else {
            render("payment_info_form.php", ["cards" => [[]], "title" => "Add extra"]);
        }

    }
    // else if user reached page via POST (as by submitting a form via POST)
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {

        if (query("INSERT INTO payment_info(card_number, cvv, exp_date, name_on_card, username)
                    VALUES(?, ?, ?, ?, ?)",
                    $_POST["card_number"],
                    $_POST["cvv"],
                    $_POST["expire_date"],
                    $_POST["name_on_card"],
                    $_SESSION["username"]) === false) {

            apologize("the card number already in our system");
        }
        $total_cost = 0;
        // recalculate customer total cost
        foreach($_SESSION["cart"] as $ticket) {
            $temp = 0;
            if ($ticket["num_bag"] > 2) {
                $temp = $ticket["num_bag"] - 2;
            }
            $total_cost += $ticket["price"] + 30*$temp;
        }
        $rows = query("SELECT is_student FROM customer WHERE username = ?", $_SESSION["username"]);
        if ($rows[0]["is_student"] == 1) {
            $is_student = true;
        } else {
            $is_student = false;
        }
        if ($is_student) {
            $total_cost *= 0.8;
        }

        $cards = query("SELECT card_number FROM payment_info WHERE username = ?", $_SESSION["username"]);
    	render("cart_form.php", ["cards" => $cards, "is_student" => true, "total_cost" => $total_cost, "title" => "Cart"]);

    }

?>
