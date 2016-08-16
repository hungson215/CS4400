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
	<thead>
	  <tr>
	    <th>Train</th>
	    <th>Arrival Time</th>
        <th>Departure Time</th>
        <th>Station</th>
	  </tr>
	 </thead>
	 <tbody>
        <tr style = "text-align: left">
            <td><?= $train_number ?></td>
            <td></td>
            <td><?= $schedules[0]["depart_time"] ?></td>
            <td><?= $schedules[0]["station_name"] ?></td>
        </tr>
		<?php for($i = 1; $i < count($schedules) - 1; $i++): ?>
		    <tr style = "text-align: left">
                <td><?= $train_number ?></td>
                <td><?= $schedules[$i]["arrival_time"] ?></td>
                <td><?= $schedules[$i]["depart_time"] ?></td>
                <td><?= $schedules[$i]["station_name"] ?></td>
		    </tr>
		<?php endfor; ?>
        <tr style = "text-align: left">
            <td><?= $train_number ?></td>
            <td><?= $schedules[count($schedules) - 1]["arrival_time"] ?></td>
            <td></td>
            <td><?= $schedules[count($schedules) - 1]["station_name"] ?></td>
        </tr>
	</tbody>
</table>

<div>
    or <a href="index.php">Back</a>
</div>
