<?php 
	session_start();
	if (!isset($_SESSION["id"])) {
		header("Location: index.php");
		exit;
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>ABCDEFG_</title>
	<link rel="stylesheet" href="style.css"/>
</head>
<body>
<div class="header">
	<div class="header-logo">
		<div class="logo-mark">S</div>
		<h1>ABCDEFG_</h1>
	</div>
</div>

<div class="page">
	<div style="width:100%; max-width:480px;" class="animate-in">
		<p class="page-title">Dashboard</p>
		<p class="page-sub">What would you like to do today?</p>

		<div class="home-grid">
			<button class="home-card" id="searchbtn">
				<div class="card-icon">
					<svg viewBox="0 0 24 24"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.35-4.35"/></svg>
				</div>
				<h3>Search Students</h3>
				<p>Find and manage existing student records.</p>
			</button>

			<button class="home-card" id="createbtn">
				<div class="card-icon">
					<svg viewBox="0 0 24 24"><path d="M12 5v14M5 12h14"/></svg>
				</div>
				<h3>Add Student</h3>
				<p>Register a new student into the system.</p>
			</button>
		</div>

		<button class="home-logout" id="logoutbtn">Sign out</button>
	</div>
</div>

<script src="homepage_script.js?v=<?= time() ?>"></script>
</body>
</html>