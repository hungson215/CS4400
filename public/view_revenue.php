<?php
    // configuration
    require("../includes/config.php");

    // if user reached page via GET (as by clicking a link or via redirect)
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        $revenues = query("SELECT month(departure_date) as m, sum(total_cost) as s
                           FROM reservation
                           GROUP BY month(departure_date)");

        render("view_revenue_form.php", ["revenues" => $revenues, "title" => "Revenue"]);
    }
    // else if user reached page via POST (as by submitting a form via POST)
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {

        //redirect("/");

    }

?>
