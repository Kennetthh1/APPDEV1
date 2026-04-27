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
		<h1>ABCD</h1>
	</div>
	<button class="btn-icon" id="closebtn">← Back</button>
</div>

<div class="page-wide animate-in">
	<div style="display:flex; align-items:flex-end; justify-content:space-between; margin-bottom:24px; flex-wrap:wrap; gap:12px;">
		<div>
			<p class="page-title">Student Records</p>
			<p class="page-sub" style="margin-bottom:0;">Search by name to view, edit, or remove records.</p>
		</div>
	</div>

	<div class="search-bar">
		<input type="text" id="txtstudentlistsearch" placeholder="Search by last name, first name, or middle name…">
		<button class="btn-primary" id="btnsearchstudent">Search</button>
	</div>

	<p id="message" style="margin-bottom:12px;"></p>

	<div class="table-wrap">
		<div class="table-head">
			<span>Results</span>
		</div>
		<table id="tblstudentlist">
			<thead>
				<tr>
					<th>ID</th>
					<th>Last Name</th>
					<th>First Name</th>
					<th>Middle Name</th>
					<th>Gender</th>
					<th>Birthday</th>
					<th></th>
				</tr>
			</thead>
			<tbody id="studentTable">
				<tr>
					<td colspan="7">
						<div class="empty-state">
							<p>Enter a name above and click <strong>Search</strong> to load student records.</p>
						</div>
					</td>
				</tr>
			</tbody>
		</table>
	</div>
</div>

<script src="search_script.js?v=<?= time() ?>"></script>
</body>
</html>