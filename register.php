<?php
if (!isset($_SERVER['PHP_AUTH_USER'])) {
    header("Location: login.php");
    die();
} else {
    echo "<p>Hello {$_SERVER['PHP_AUTH_USER']}.</p>";
    echo "<p>You entered {$_SERVER['PHP_AUTH_PW']} as your password.</p>";
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<link href="css/stylesheet.css" rel="stylesheet" type="text/css" />
	<title> Register | ACTS </title>
</head>
<body>
	<div class="container">
		<div class="side">
			<a class="home" href="index.html">	<h2> ACTS </h2> </a>
			<ul>
				<li>
					<a class="menuItem" href="login.html">Login</a>
				</li>
				<li>
					<a class="menuItem" href="register.hmtl">Register</a>
				</li>
			</ul>
		</div>
		<div class="content">
			<div class="form">
			<h1> Register </h1>
			<form action="register/new" method="POST">
				  <table>
						<tr><td>User:</tr></td>
				  <tr><td><input type="text" name="user" value="user"></tr></td>
				  <tr><td>Password:</tr></td>
				  <tr><td><input type="password" name="password" value="pass"></tr></td>
				  <tr><td><input type="submit" value="Register" class="button"></tr></td>
				</table>
			</form>
		</div>
		</div>
	</div>
</body>
</html>
