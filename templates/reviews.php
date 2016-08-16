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
	    <th>Rating</th>
	    <th>Comment</th>
	  </tr>
	 </thead>
	 <tbody>
		<?php foreach ($reviews as $review): ?>
		    <tr style = "text-align: left">
		    	<td><?= $review["rating"] ?></td>
		        <td><?= $review["comment"] ?></td>
		    </tr>
		<?php endforeach ?>
	</tbody>
</table>
