<?php
session_start();
$first=$_SESSION["fname"];
$last=$_SESSION["lname"];

$time = time();
$actual_time=date("H:i:s", $time);
$actual_time=date("d:M:Y @ H:i:s", $time);

echo "<h3> You are Logged at  : </h3>"."<h3>".$actual_time."</h3>";
echo "<h3>Welcome!  </h3>"."<h3>".$first.' '.$last."</h3>"."<br>";

 ?>
