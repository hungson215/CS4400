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

<form action="review.php" class="form-horizontal" method="post">
    <fieldset>
        <div class="form-group">
            <select class="form-control" id="trainNum" name = "trainNum">
            <?php foreach($train_numbers as $train_number): ?>
              <option><?= $train_number["train_number"] ?></option>
            <?php endforeach ?>
            </select>
        </div>
        <div class="form-group">
            <select class="form-control" id="rating" name = "rating">
              <option>Good</option>
              <option>Neutral</option>
              <option>Bad</option>
            </select>
        </div>
        <div class="form-group">
            <input class="form-control" id="comment" name="comment" type="text" placeholder="Comment">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </fieldset>
</form>
