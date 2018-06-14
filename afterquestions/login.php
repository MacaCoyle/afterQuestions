<?php
require_once("functions.php");

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title>Login</title>

</head>
<body>
<main>
	<form>
	<div>
		<label for="name">Username</label> <br/>
		<input type="text" name="username">
	</div>
	<div>
		<label for="password">Password</label> <br/>
		<input type="password" name="password">
	</div>

	<div>
		<input type="submit" name="submit" value="Enviar">
	</div>

	</form>
</main>

</body>
</html>