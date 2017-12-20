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
	<title>Welcome</title>
</head>
<body>
	<div class="container">
		<div class="side">
			<h1> Chat Server </h1>

			<ul>
				<li class="menuItem">
					<a class="menuItem" href="login?logout=true">Logout</a>
				</li>
			</ul>
		</div>
		<div class="content">
			empty
		</div>
	</div>
</body>
</html>
