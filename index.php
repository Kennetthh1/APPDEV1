<?php 
	session_start();
	if (isset($_SESSION["id"])) {
		header("Location: homepage.php");
		exit;
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>StudentBase — Sign In</title>
	<link rel="stylesheet" href="style.css"/>
</head>
<body>
<div class="login-layout">
	<div class="login-left">
		<div class="brand">ABCD<em>EFG</em></div>
	
	</div>
	<div class="login-right">
		<div class="login-box animate-in">
			<h2>Welcome back</h2>
			<p class="sub">Sign in to your account to continue.</p>

			<p id="prompt"></p>

			<div class="form-group">
				<label for="uname">Username</label>
				<input type="text" id="uname" placeholder="Enter your username" autocomplete="username">
			</div>
			<div class="form-group">
				<label for="upass">Password</label>
				<input type="password" id="upass" placeholder="Enter your password" autocomplete="current-password">
			</div>

			<button class="btn-primary" id="loginbtn" style="width:100%; margin-top:8px;">Sign In</button>
		</div>
	</div>
</div>
<script src="login_script.js?v=<?= time() ?>"></script>
</body>
</html>