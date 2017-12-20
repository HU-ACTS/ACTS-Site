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
	<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate"/>
	<meta http-equiv="Pragma" content="no-cache"/>
	<meta http-equiv="Expires" content="0"/>
	<link href="css/stylesheet.css" rel="stylesheet" type="text/css" />
	<title>Welcome | ACTS</title>
</head>
<body>
	<div class="container">
		<div class="side">
			<a class="home" href="index.html">	<h2> ACTS </h2> </a>
			<ul>
				<li>
					<a class="menuItem" href="login.php">Login</a>
				</li>
				<li>
					<a class="menuItem" href="register.php">Register</a>
				</li>
			</ul>
		</div>
		<div class="content">
			<h1> Welcome </h1>
			<div class="searchbar">

			</div>
			<div class="data">
				<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
			  	<script type="text/javascript">
					google.charts.load('current', {'packages':['corechart']});
					google.charts.setOnLoadCallback(drawChart);

					function drawChart() {
					  var data = google.visualization.arrayToDataTable([
						['day', 'Target', 'Result'],
						['2004',  1000,      400],
						['2005',  1170,      4600],
						['2006',  660,       1120],
						['2007',  1030,      540]
					  ]);

					  var options = {
						title: 'Period: 4 weeks',
						curveType: 'function',
						legend: { position: 'right' }
					  };

					  var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

					  chart.draw(data, options);
					}
				</script>
				<div id="curve_chart" style="width: 900px; height: 500px"></div>
			</div>

		</div>
			<div class="footer">
			<a href="https://husite.nl/acts/">ACTS 2017 @ HU</a>
			</div>

	</div>
</body>
</html>
