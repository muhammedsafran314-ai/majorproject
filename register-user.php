<?php
include "db.php";

$name = $_POST['name'];
$pass = $_POST['password'];

$sql = "INSERT INTO users(name,password)
        VALUES('$name','$pass')";

if($conn->query($sql)){
    header("Location: login.html");
}else{
    echo "Registration failed";
}
?>
