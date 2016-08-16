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
    <form action="update_date.php" method="post">
    	<thead>
    	  <tr>
    	    <th>Reservation ID</th>
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
    		    <tr style = "text-align: left">
                    <td><?= $reserve["reservationid"] ?></td>
                    <td><?= $reserve["train_number"] ?></td>
                    <td><?= $reserve["departure_date"] ?>-<?= $reserve["depart_arrival_time"] ?><br>
                    <td><?= $reserve["depart_from"] ?></td>
                    <td><?= $reserve["arrive_at"] ?></td>
                    <td><?= $reserve["class"] ?></td>
                    <td>$<?= $reserve["price"] ?></td>
                    <td><?= $reserve["number_of_bags"] ?></td>
                    <td><?= $reserve["passenger_name"] ?></td>
    		    </tr>
    	</tbody>
        </table>
        <div class="form-group">
            <input autofocus class="form-control" id="new_date" name="reservationid" value='<?= $reserve["reservationid"] ?>' type="hidden"/>
            <input autofocus class="form-control" id="new_date" name="train_number" value='<?= $reserve["train_number"] ?>' type="hidden"/>
            <label for="new_date">New Date</label>
            <input autofocus class="form-control" id="new_date" name="new_date" type="date" required/>
        </div>
        <button type="submit" class="btn btn-primary">Next</button>
    </form>
<div>
    or <a href="index.php">Back</a>
</div>
