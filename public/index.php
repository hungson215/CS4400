<?php
	// configuration
	require("../includes/config.php");
	// if(isLogin()){
		if($_SESSION['manager'])
			render("../templates/manager_view.php", ["title" => "Admin View"]);
		else
			render("../templates/customer_view.php", ["title" => "Train Reservation"]);
	// } else {
	// 	include "login.php";
	// }
	//render("portfolio.php", ["positions" => $positions, "title" => "Portfolio", "cash" => $cash[0]["cash"]]);
?>
