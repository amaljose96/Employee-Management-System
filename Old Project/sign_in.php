
<html>
	<head>
			<link rel="stylesheet" type="text/css" href="main.css">
						<link rel="stylesheet" type="text/css" href="sign_in.css">
			<script src="jquery.js"></script>
<script src="main.js"></script>
<script src="sign_in.js"></script>
	</head>
	<body>
		<div id="background"><div id="inner_background"><div id="Sys_type">Employee Management System v2.0</div><div id="date_time"></div>
			<div id="BODY">
				<form action="sign_in.php" method="post">
					<div id="ID_label">Employee ID</div>
					<input class="boxes" name="ID" id="ID" type="text"></input>
					<div id="password_label">Password</div>
					<input class="boxes" name="password" id="password" type="password"></input>
					<input type="submit" class="boxes" id="submit" value="Log in" onclick="pusherror();">
				</form>
			</div>
	</div></div>
	<div id="error_box">Invalid ID or password</div>
	<?php
	$servername = "my******t.com";
	$username = "*****l";
	$password = "*****";
	$database= "*****b";
	// Create connection
$conn = new mysqli($servername, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$id=100;
$password=" ";
if($_SERVER['REQUEST_METHOD']=="POST"){
	$id=$_POST['ID'];
	$password=$_POST['password'];
}

if(!empty($_POST['ID'])){
$sql = "SELECT * FROM  `EMP` WHERE ID=".$id;
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        if($row['PASSWORD']==$password){
						session_start();
						$_SESSION["ID"]=$id;
						echo "<script>window.location.href='entry_page.php'</script>";
				}
				else{
					echo "<script>pusherror('Invalid password')</script>";
				}
    }
} else {
    echo "<script>pusherror('Invalid ID')</script>";
}
}
$conn->close();
		?>
	</body>

</html>
