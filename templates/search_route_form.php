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

<form action="search_train.php" class="form-horizontal" method="post">
    <fieldset>
        <div class="form-group">
            <select class="form-control" id="depart_station" name = "depart_station" required>
            <?php foreach($stations as $station): ?>
              <option><?= $station["location"] ?>(<?= $station["station_name"] ?>)</option>
            <?php endforeach ?>
            </select>
            <select class="form-control" id="arrival_station" name = "arrival_station" required>
            <?php foreach($stations as $station): ?>
              <option><?= $station["location"] ?>(<?= $station["station_name"] ?>)</option>
            <?php endforeach ?>
            </select>
        </div>
        <div class="form-group">
            <label for="departure_date">Departure date</label>
            <input autofocus class="form-control" id="departure_date" name="departure_date" type="date" required/>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Next</button>
        </div>
    </fieldset>
</form>
<div>
    or <a href="index.php">Back</a>
</div>
