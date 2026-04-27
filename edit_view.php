<?php
	session_start();
	if (!isset($_SESSION["id"])) {
		header("Location: index.php");
		exit;
	}
	$id     = $_GET["id"];
	$lname  = $_GET["lname"];
	$gname  = $_GET["gname"];
	$mname  = $_GET["mname"];
	$gender = $_GET["gender"];
	$bday   = $_GET["bday"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>StudentBase — Edit Student</title>
	<link rel="stylesheet" href="style.css"/>
</head>
<body>
<div class="header">
	<div class="header-logo">
		<div class="logo-mark">S</div>
		<h1>StudentBase</h1>
	</div>
	<button class="btn-icon" onclick="window.location.href='search_view.php'">← Back</button>
</div>

<div class="page animate-in">
	<div class="card-wide">
		<p class="page-title">Edit Student</p>
		<p class="page-sub">Update the information below for this student record.</p>

		<p id="message"></p>

		<input type="hidden" id="id" value="<?= htmlspecialchars($id) ?>">

		<div style="display:grid; grid-template-columns:1fr 1fr; gap:0 16px;">
			<div class="form-group">
				<label for="lname">Last Name</label>
				<input type="text" id="lname" value="<?= htmlspecialchars($lname) ?>">
			</div>
			<div class="form-group">
				<label for="fname">First Name</label>
				<input type="text" id="fname" value="<?= htmlspecialchars($gname) ?>">
			</div>
			<div class="form-group" style="grid-column:1/-1;">
				<label for="mname">Middle Name</label>
				<input type="text" id="mname" value="<?= htmlspecialchars($mname) ?>">
			</div>
			<div class="form-group">
				<label for="gender">Gender</label>
				<input type="text" id="gender" value="<?= htmlspecialchars($gender) ?>">
			</div>
			<div class="form-group">
				<label for="bday">Birthday</label>
				<input type="date" id="bday" value="<?= htmlspecialchars($bday) ?>">
			</div>
		</div>

		<div class="divider"></div>

		<div style="display:flex; gap:10px; justify-content:flex-end;">
			<button class="btn-ghost" onclick="window.location.href='search_view.php'">Cancel</button>
			<button class="btn-primary" id="btnupdatestudent">Save Changes</button>
		</div>
	</div>
</div>

<script src="edit_script.js?v=<?= time() ?>"></script>
</body>
</html>