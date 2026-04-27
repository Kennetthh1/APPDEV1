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
		<div class="logo-mark">AB</div>
		<h1>ABCDEFG_</h1>
	</div>
	<button class="btn-icon" id="closebtn">← Back</button>
</div>

<div class="page animate-in">
	<div class="card-wide">
		<p class="page-title">Add Student</p>
		<p class="page-sub">Fill in the fields below to register a new student.</p>

		<p id="message"></p>

		<div style="display:grid; grid-template-columns:1fr 1fr; gap:0 16px;">
			<div class="form-group">
				<label for="info_lname">Last Name</label>
				<input type="text" id="info_lname" placeholder="e.g. Dela Cruz">
			</div>
			<div class="form-group">
				<label for="info_fname">First Name</label>
				<input type="text" id="info_fname" placeholder="e.g. Juan">
			</div>
			<div class="form-group">
				<label for="info_mname">Middle Name</label>
				<input type="text" id="info_mname" placeholder="e.g. Santos">
			</div>
			<div class="form-group">
				<label for="info_sname">Suffix</label>
				<input type="text" id="info_sname" placeholder="e.g. Jr., III">
			</div>
			<div class="form-group">
				<label for="info_gender">Gender</label>
				<input type="text" id="info_gender" placeholder="e.g. Male / Female">
			</div>
			<div class="form-group">
				<label for="info_bdate">Birthdate</label>
				<input type="date" id="info_bdate">
			</div>
		</div>

		<div class="divider"></div>

		<div style="display:flex; gap:10px; justify-content:flex-end;">
			<button class="btn-ghost" onclick="window.location.href='homepage.php'">Cancel</button>
			<button class="btn-primary" id="btnaddstudent">Add Student</button>
		</div>
	</div>
</div>

<script src="script.js?v=<?= time() ?>"></script>
<script src="create_script.js?v=<?= time() ?>"></script>
</body>
</html>