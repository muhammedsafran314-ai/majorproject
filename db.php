<?php

$host = "sql108.ezyro.com";
$user = "ezyro_41147299";
$pass = "FixRide@2026";
$db   = "ezyro_41147299_fixmyride";

$conn = new mysqli($host,$user,$pass,$db);

if($conn->connect_error){
    die("Database connection failed");
}

?>
