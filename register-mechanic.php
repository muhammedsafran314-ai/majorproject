<?php
include "db.php";

$name = $_POST['name'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$password = $_POST['password'];
$start = $_POST['start_time'];
$end   = $_POST['end_time'];

$lat = 10.1069 + (rand(-100,100)/10000);
$lng = 76.4737 + (rand(-100,100)/10000);

$sql = "INSERT INTO mechanics
(name,phone,address,password,lat,lng,start_time,end_time,online)
VALUES
('$name','$phone','$address','$password','$lat','$lng','$start','$end',0)";

if($conn->query($sql)){
    header("Location: login.html");
}else{
    echo "Registration failed";
}
?>
