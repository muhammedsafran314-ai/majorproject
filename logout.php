<?php
include "db.php";
session_start();

if(isset($_SESSION['mechanic_id'])){

    $id = $_SESSION['mechanic_id'];
    $conn->query("UPDATE mechanics SET online=0 WHERE id=$id");

}

session_destroy();
header("Location: login.html");
?>
