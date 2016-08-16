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

<form action="payment_info.php" method="post">
    <fieldset>
        <div class="form-group">
            <label for="name_on_card">Name on Card</label>
            <input autofocus class="form-control" id="name_on_card" name="name_on_card" placeholder="Name" type="text" required/>
        </div>
        <div class="form-group">
            <label for="card_number">Card Number</label>
            <input autofocus class="form-control" id="card_number" name="card_number" placeholder="123456789123" type="number" required/>
        </div>
        <div class="form-group">
            <label for="cvv">CVV</label>
            <input autofocus class="form-control" id="cvv" name="cvv" placeholder="123" type="number" required/>
        </div>
        <div class="form-group">
            <label for="expire_date">Expiration Date</label>
            <input autofocus class="form-control" id="expire_date" name="expire_date" type="date" required/>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-default">Add Card</button>
        </div>
    </fieldset>
</form>

Delete Card
<form action="remove_payment_info.php" method="post">
    <fieldset>
        <div class="form-group">
            <select class="form-control" name = "card_number_delete" required>
            <?php foreach($cards as $card): ?>
              <option><?= $card["card_number"] ?></option>
            <?php endforeach ?>
            </select>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-default">Remove</button>
        </div>
    </fieldset>
</form>

<div>
    or <a href="add_to_cart.php">Back to Cart</a>
</div>
