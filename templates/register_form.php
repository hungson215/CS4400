<!-- <form action="register.php" method='post'>
		<fieldset>
			<legend>New User Registrration</legend>
			<table>
				<tr><td>Username:</td><td><input type="text" name='username' size="30" required/></td></tr>
				<tr><td>E-mail Address:</td><td><input type="email" name='email' size="30" required/></td></tr>
				<tr><td>Password:</td><td><input type='password' name='password' size="30" required/></td></tr>
				<tr><td>Confirm Password:</td><td><input type='password' name='pass_confirm' size='30'required/></td></tr>
				<tr><td><input type='button' onclick="location='index.php'" value="Go Back"/></td>
						<td><input type='submit' name='create' value="Create"/></td></tr>
			</table>
		</fieldset>
</form>
<div>
    or <a href="login.php">log in</a>
</div> -->


<form action="register.php" method="post">
    <fieldset>
        <div class="form-group">
            <input autofocus class="form-control" name="username" placeholder="Username" type="text" required/>
        </div>
        <div class="form-group">
            <input class="form-control" name="email" placeholder="Email" type="email"/>
        </div>
        <div class="form-group">
            <input class="form-control" name="password" placeholder="Password" type="password"/>
        </div>
        <div class="form-group">
            <input class="form-control" name="confirmation" placeholder="Comfirmation" type="password"/>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-default">Register</button>
        </div>
    </fieldset>
</form>
<div>
    or <a href="login.php">log in</a>
</div>
