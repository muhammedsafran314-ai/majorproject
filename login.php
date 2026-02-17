<?php
include "db.php";
session_start();

$name = trim($_POST['name']);
$password = trim($_POST['password']);
$role = $_POST['role'];

if($role == "mechanic"){

    $stmt = $conn->prepare("
    SELECT id FROM mechanics 
    WHERE name = ? AND password = ?
    ");
    $stmt->bind_param("ss",$name,$password);
    $stmt->execute();
    $stmt->store_result();

    if($stmt->num_rows > 0){

        $stmt->bind_result($id);
        $stmt->fetch();

        $conn->query("UPDATE mechanics SET online=1 WHERE id=$id");

        $_SESSION['mechanic_id'] = $id;

        header("Location: dashboard.php");
        exit();

    }else{
        echo "Invalid login";
    }

}else{

    $stmt = $conn->prepare("
    SELECT name FROM users 
    WHERE name = ? AND password = ?
    ");
    $stmt->bind_param("ss",$name,$password);
    $stmt->execute();
    $stmt->store_result();

    if($stmt->num_rows > 0){

        $_SESSION['user_name'] = $name;
        header("Location: select-problem.html");
        exit();

    }else{
        echo "Invalid login";
    }
}
?>
