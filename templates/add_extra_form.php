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

<form action="add_to_cart.php" class="form-horizontal" method="post">
    <fieldset>
        <div class="form-group">
            <select class="form-control" id="num_bag" name = "num_bag" required>
              <option>0</option>
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
            </select>
        </div>
        <div class="form-group">
            <input class="form-control" name="passenger_name" placeholder="Your name" type="text" required/>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Next</button>
        </div>
    </fieldset>
</form>
<div>
    or <a href="index.php">Back</a>
</div>
