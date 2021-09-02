<?php
$XVWA_WEBROOT = ".";
$host = "xvwadb";
$dbname = "xvwa";
$user = "xvwa";
$pass = "FSMuSI6yUV9yfi2aMZ31";
$conn = new mysqli($host,$user,$pass,$dbname);
$conn1 = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
$conn1->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>
