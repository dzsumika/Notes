<?php
require('assets/header.php');
require('scripts/connect.php');
?>

<form class="login" action="scripts/login.php" method="POST">
    <p> Login/Register </p>
    <br/>
	<p> Name:</p>
	<input type="text" name="name" required>
	<p> Password:</p>
	<input type="password" name="password" required>
	<br/><br/>
	<input type="submit" value="LOGIN/REGISTER" id="send_form_button">
</form>

<?php
require('assets/footer.php');
?>
