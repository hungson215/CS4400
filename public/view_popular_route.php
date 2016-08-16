<?php
    // configuration
    require("../includes/config.php");

    // if user reached page via GET (as by clicking a link or via redirect)
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        $routes = query("SELECT month(departure_date) as m, train_number as t, COUNT(reservationid) as c
                        FROM reserves
                        GROUP BY month(departure_date), train_number");

        render("view_popular_route_form.php", ["routes" => $routes, "title" => "Revenue"]);
    }
    // else if user reached page via POST (as by submitting a form via POST)
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {

        //redirect("/");

    }

?>
SELECT month(departure_date), train_number, count(reservationid) FROM `reserves`
group by month(departure_date), train_number
