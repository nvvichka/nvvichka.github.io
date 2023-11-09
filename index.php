<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
	$username = $_POST['username'];
	$password = $_POST['password'];
	$con = mysqli_connect("localhost", "root", "", "test");
	$query = "SELECT * FROM user where username='$username' and password='$password'";
	$res = mysqli_query($con, $query);
	$rows = mysqli_num_rows($res);
	session_start();
	if ($rows == 1) {
		header('location:home.php');
		$_SESSION['username'] = $username;
	} else {
		echo "INVALID USERNAME AND PASSWORD";
	}
}
?>
<!DOCTYPE html>
<html>

<head>
	<title>Login</title>
	<link rel="manifest" href="/manifest.json">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>

<body class="bg">
	<div class="formbox">
		<h2>Login</h2>
		<form method="POST" action="index.php">
			<input type="text" name="username" placeholder="Enter your username">
			<input type="password" name="password" placeholder="Enter your password">
			<input type="submit" value="LOGIN">
		</form>
	</div>
	<script>
		if ('serviceWorker' in navigator && 'PushManager' in window) {
			navigator.serviceWorker.register('service-worker.js').then(function (registration) {
				console.log('Service Worker registered with scope:', registration.scope);
				// Request notification permissions when the service worker is registered
				return registration.pushManager.getSubscription()
					.then(function (subscription) {
						if (!subscription) {
							// If the user is not already subscribed, request notification permissions
							return registration.pushManager.subscribe({
								userVisibleOnly: true,
							});
						}
					});
			}).then(function (subscription) {
				// Send the subscription data to the server for saving (you can use fetch API here)
				if (subscription) {
					fetch('save_subscription.php', {
						method: 'POST',
						headers: {
							'Content-Type': 'application/json'
						},
						body: JSON.stringify(subscription)
					});
				}
			}).catch(function (error) {
				console.error('Service Worker registration failed:', error);
			});
		}
	</script>
</body>

</html>