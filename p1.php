<?php
session_start();
$_SESSION["fname"] = "Tanuja";
$_SESSION["lname"] = "Saini";
$first=$_SESSION["fname"];
$last=$_SESSION["lname"];

$time = time();
$actual_time=date("H:i:s", $time);
$actual_time=date("d:M:Y  H:i:s", $time);


if(isset($_POST["fname"]) && isset($_POST["lname"])){
	if(!empty($_POST["fname"]) && !empty($_POST["lname"])){
		$n1 = $_POST["fname"];
		$n2= $_POST["lname"];
		if($first=== $n1 && $last === $n2){
			header("Location:p2.php");
		}
		else{
			echo "<h3>wrong id -</h3>"."<h3>".$actual_time."</h3>"."<br>";
 		}
 	}
 	else{
 		echo "<h3>wrong id -</h3>"."<h3>".$actual_time."</h3>"."<br>";
 	}
}
?>


<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body class="wrapper">
	<form action = "p1.php" method="POST">
		<table>
			<caption>Detail-Form</caption>
			<tr>
				<td>First Name:</td>
				<td><input type="text" name="fname"><br></td>
			</tr>
			<tr>
				<td>Last Name:</td>
				<td><input type="text" name="lname"><br></td>
			<tr>
				<td>Register</td>
				<td><input type="Submit" value="Submit"></td>
			</tr>
		</table>
	</form>
	</body>
</html>
