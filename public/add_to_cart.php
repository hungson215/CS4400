<?php

    // configuration
    require("../includes/config.php");

    // if user reached page via GET (as by clicking a link or via redirect)
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
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
    // else if user reached page via POST (as by submitting a form via POST)
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        if (isset($_SESSION["current_item"])) {
            $r = $_SESSION["current_item"];
            $train_number = substr($r, strpos($r, "TRAIN_NUMBER") + 13,
                                        strpos($r, "DATE") - strpos($r, "TRAIN_NUMBER") - 14);
            $departure_date = substr($r, strpos($r, "DATE") + 5,
                                        strpos($r, "DEPART_TIME") - strpos($r, "DATE") - 6);
            $depart_time = substr($r, strpos($r, "DEPART_TIME") + 12,
                                        strpos($r, "ARRIVAL_TIME") - strpos($r, "DEPART_TIME") - 13);
            $arrival_time = substr($r, strpos($r, "ARRIVAL_TIME") + 13,
                                        strpos($r, "DURATION") - strpos($r, "ARRIVAL_TIME") - 14);
            $duration = substr($r, strpos($r, "DURATION") + 9,
                                        strpos($r, "PRICE") - strpos($r, "DURATION") - 10);
            $price = substr($r, strpos($r, "PRICE") + 6,
                                        strlen($r) - strpos($r, "PRICE") - 1);


            // Update SESSION's cart
            $index = count($_SESSION["cart"]);
            $_SESSION["cart"][$index]["train_number"] = $train_number;
            $_SESSION["cart"][$index]["departure_date"] = $departure_date;
            $_SESSION["cart"][$index]["depart_station"] = $_SESSION["depart_station"];
            $_SESSION["cart"][$index]["depart_time"] = $depart_time;
            $_SESSION["cart"][$index]["arrival_time"] = $arrival_time;
            $_SESSION["cart"][$index]["arrival_station"] = $_SESSION["arrival_station"];
            $_SESSION["cart"][$index]["duration"] = $duration;
            $_SESSION["cart"][$index]["price"] = $price;
            $_SESSION["cart"][$index]["num_bag"] = $_POST["num_bag"];
            $_SESSION["cart"][$index]["passenger_name"] = $_POST["passenger_name"];
            if (strpos($_SESSION["current_item"], "First") !== false) {
                $_SESSION["cart"][$index]["class"] = "first";
            } else {
                $_SESSION["cart"][$index]["class"] = "second";
            }

            $_SESSION["depart_station"] = "";
            $_SESSION["arrival_station"] = "";
            unset($_SESSION["current_item"]);
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
