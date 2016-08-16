<ul class="nav nav-pills nav-justified">
    <li><a href="view_train_schedule.php">View Train Schedule</a></li>
    <li><a href="search_train.php">Make Reservation</a></li>
    <li><a href="cancel_reservation.php">Cancel Reservation</a></li>
    <li><a href="update_reservation.php">Update Reservation</a></li>
    <li><a href="view_review.php">View Review</a></li>
    <li><a href="review.php">Submit Review</a></li>
    <li><a href="verify_student.php">Verify Student Status</a></li>
    <li><a href="logout.php"><strong>Log Out</strong></a></li>
</ul>

<table  class="table table-striped">
    <form action="add_extra.php" method="post">
	<thead>
	  <tr>
	    <th>Train</th>
	    <th>Time</th>
        <th>1st Class Price</th>
        <th>2nd Class Price</th>
	  </tr>
	 </thead>
	 <tbody>
		<?php foreach($routes as $route): ?>
		    <tr style = "text-align: left">
                <td><?= $route["train_number"] ?></td>
                <td><?= $departure_date ?>-<?= $route["depart_time"] ?>-<?= $route["arrival_time"] ?><br>
                    <?= $route["duration"] ?></td>
                <td><input type="radio" name="order" value='<?= "First TRAIN_NUMBER:".$route["train_number"]." DATE:".$departure_date." DEPART_TIME:".$route["depart_time"]." ARRIVAL_TIME:".$route["arrival_time"]." DURATION:".$route["duration"]." PRICE:".$route["first_price"]?>'/>
                    $<?= $route["first_price"] ?></td>
                <td><input type="radio" name="order" value='<?= "Second TRAIN_NUMBER:".$route["train_number"]." DATE:".$departure_date." DEPART_TIME:".$route["depart_time"]." ARRIVAL_TIME:".$route["arrival_time"]."DURATION:".$route["duration"]." PRICE:".$route["second_price"]?>'/>
                    $<?= $route["second_price"] ?></td>
		    </tr>
		<?php endforeach; ?>
	</tbody>
    </table>
    <button type="submit" class="btn btn-primary">Next</button>
    </form>
<div>
    or <a href="index.php">Back</a>
</div>
