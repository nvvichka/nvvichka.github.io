<?php
session_start();
$uname = $_SESSION['username'];
?>
<!DOCTYPE html>
<html>

<head>
	<title>Home</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>

<body class="bg">
	<div class="header">
		<ul>
			<h1>Plant Monitoring System</h1>
		</ul>
		<div class="user_info">
			Logged in as
			<?php echo "$uname"; ?>
			<a href="logout.php">Logout</a>
		</div>
	</div>
	<div class="space"></div>
	<div class="container">
		<div class="card">
			<div class="card-icon"><i class="fa fa-thermometer" aria-hidden="true"></i></div>
			<div class="card-name">Soil Temperature</div>
			<div class="card-text" id="light">25°C</div>
		</div>
		<div class="card">
			<div class="card-icon"><i class="fa fa-tint" aria-hidden="true"></i></div>
			<div class="card-name">Humidity</div>
			<div class="card-text" id="light">65%</div>
		</div>
		<div class="card">
			<div class="card-icon"><i class="fa fa-flask" aria-hidden="true"></i></div>
			<div class="card-name">PH Quality</div>
			<div class="card-text" id="phQuality">pH 7</div>
		</div>
		<div class="card">
			<div class="card-icon"><i class="fa fa-pagelines" aria-hidden="true"></i></div>
			<div class="card-name">Soil Moisture</div>
			<div class="card-text" id="soilmoisture">50%</div>
		</div>
		<div class="card">
			<div class="card-icon"><i class="fa fa-sun-o" aria-hidden="true"></i></div>
			<div class="card-name">Light</div>
			<div class="card-text" id="Light">1000Lux</div>
		</div>
		<div class="card">
			<div class="card-icon"><i class="fa fa-calendar" aria-hidden="true"></i></div>
			<div class="card-name">Schedule Watering</div>
			<div class="water-scheduler">
				<input type="datetime-local" id="wateringTime">
				<button id="scheduleButton">Set Schedule</button>
			</div>
		</div>
	</div>

</body>

</html>