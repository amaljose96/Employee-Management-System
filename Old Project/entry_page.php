
<html>
	<head>
			<link rel="stylesheet" type="text/css" href="main.css">
			<link rel="stylesheet" type="text/css" href="entry_page.css">
			<script src="jquery.js"></script>
			<script src="main.js"></script>
			<script src="entry_page.js"></script>
	</head>
	<body>
		<div id="background"><div id="inner_background"><div id="Sys_type">Employee Management System v2.0</div><div id="date_time"></div>
			<div id="Welcome_line">Welcome</div>
			<table id="details_pane">
				<tr><td>Job:</td><td id="job_blank"></td></tr>
				<tr><td>Status:</td><td id="status_blank"></td></tr>
			</table>

			<div id="notifications_pane">
			</div>
			<div id="sign_out">Sign Out</div>
			<div id="continue">Continue</div>
	</div></div>
	<?php
	/*$servername = "***";
	$username = "a*";
	$password = "****";
	$database= "a21*b";
	// Create connection
	/*
$conn = new mysqli($servername, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
session_start();

    echo "<script>alert('Session started');</script>";
$id=$_SESSION["ID"];


$sql = "SELECT * FROM  `EMP` WHERE ID=".$id;
$result = $conn->query($sql);

    echo "<script>alert('First query done');</script>";
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
				$name=$row['firstname'];
				$job=$row['job'];
				$shift=$row['shift'];
				  echo "<script>alert('Name is "+$name+"');</script>";
				echo "<script>
				document.getElementById('Welcome_line').innerHTML='Welcome "+$name+"';
				document.getElementById('job_blank').innerHTML="+$job+"';
				document.getElementById('status_blank').innerHTML=decideStatus('"+$shift+"');
				</script>";
    }
} else {
    echo "<script>alert('Internal error. Problem with user details');window.location.href='sign_in.php';</script>";
}

$sql = "SELECT * FROM  `Notifications` WHERE USERID=".$id;
$result = $conn->query($sql);
    echo "<script>alert('Second query done');</script>";

if ($result->num_rows > 0) {
    // output data of each row
		$text=" ";
    while($row = $result->fetch_assoc()) {
			$text.=$row['DESCRIPTION']+"<br>";
    }
		echo "<script>document.getElementById('notifications_pane').innerHTML='"+$text+"';</script>";
} else {
    echo "<script>document.getElementById('notifications_pane').innerHTML='No Notifications';</script>";
}
$conn->close();*/
		?>
	</body>

</html>
