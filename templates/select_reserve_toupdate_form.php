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
    <form action="update.php" method="post">
    	<thead>
    	  <tr>
            <th>Select</th>
    	    <th>Train</th>
    	    <th>Time</th>
            <th>Depart from</th>
            <th>Arrive at</th>
            <th>Class</th>
            <th>Price</th>
            <th># of Bagges</th>
            <th>Passenger Name</th>
    	  </tr>
    	 </thead>
    	 <tbody>
    		<?php foreach($reserves as $ticket): ?>
    		    <tr style = "text-align: left">
                    <td><input type="radio" name="reserve_toupdate" value='<?= $ticket["train_number"]."+".$ticket["reservationid"] ?>'/></td>
                    <td><?= $ticket["train_number"] ?></td>
                    <td><?= $ticket["departure_date"] ?>-<?= $ticket["depart_arrival_time"] ?><br>
                    <td><?= $ticket["depart_from"] ?></td>
                    <td><?= $ticket["arrive_at"] ?></td>
                    <td><?= $ticket["class"] ?></td>
                    <td>$<?= $ticket["price"] ?></td>
                    <td><?= $ticket["number_of_bags"] ?></td>
                    <td><?= $ticket["passenger_name"] ?></td>
    		    </tr>
    		<?php endforeach; ?>
    	</tbody>
        </table>
        <button type="submit" class="btn btn-primary">Next</button>
    </form>
<div>
    or <a href="index.php">Back</a>
</div>
