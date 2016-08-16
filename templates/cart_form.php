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
    <form action="buy.php" method="post">
    	<thead>
    	  <tr>
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
    		<?php foreach($_SESSION["cart"] as $ticket): ?>
    		    <tr style = "text-align: left">
                    <td><?= $ticket["train_number"] ?></td>
                    <td><?= $ticket["departure_date"] ?>-<?= $ticket["depart_time"] ?>-<?= $ticket["arrival_time"] ?><br>
                        <?= $ticket["duration"] ?></td>
                    <td><?= $ticket["depart_station"] ?></td>
                    <td><?= $ticket["arrival_station"] ?></td>
                    <td><?= $ticket["class"] ?></td>
                    <td>$<?= $ticket["price"] ?></td>
                    <td><?= $ticket["num_bag"] ?></td>
                    <td><?= $ticket["passenger_name"] ?></td>
    		    </tr>
    		<?php endforeach; ?>
    	</tbody>
        </table>
        <div>
            <?php if($is_student): ?>
            Student Discount Verified
            <?php else: ?>
            No discount
            <?php endif; ?>
        </div>
        Total cost: $<input type="text" name="total_cost" value='<?= $total_cost ?>' readonly="true">
        <div class="form-group">
            Select card:
            <select class="form-control" id="card_num" name = "card_num" required>
            <?php foreach($cards as $card): ?>
              <option><?= $card["card_number"] ?></option>
            <?php endforeach ?>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Buy</button>
    </form>
    <a href="payment_info.php">Add Card</a>
<div>
    or <a href="search_train.php">Continue adding a train</a>
</div>
