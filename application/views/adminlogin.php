<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>/css/w3.css">
</head>
<body>
	<div class="w3-row w3-card-4 w3-padding w3-center" style="max-width: 400px;margin: 19% auto">
		<h3>Admin Login</h3>
		<form action="submit" method="post">
			<input type="text" name="username" class="w3-input w3-border"><br>
			<input type="password" name="password" class="w3-input w3-border"><br>
			<button class="w3-button w3-green">Login</button>
			<br>
		</form>
		
	</div>
</body>
</html>