<?php
session_start();
if(!isset($_SESSION['mechanic_id'])){
    header("Location: login.html");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
<title>FixMyRide Mechanic</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>
*{margin:0;padding:0;box-sizing:border-box;font-family:'Segoe UI',sans-serif;}

body{
    background:#050505;
    color:white;
    min-height:100vh;
}

/* glow */
body::before{
    content:"";
    position:fixed;
    width:600px;height:600px;
    background:radial-gradient(circle,#ff6a00,transparent);
    top:-200px;left:-200px;
    filter:blur(150px);
}
body::after{
    content:"";
    position:fixed;
    width:600px;height:600px;
    background:radial-gradient(circle,#ff8c00,transparent);
    bottom:-200px;right:-200px;
    filter:blur(150px);
}

/* navbar */
nav{
    display:flex;
    justify-content:space-between;
    align-items:center;
    padding:18px 8%;
    background:rgba(0,0,0,0.5);
    backdrop-filter:blur(10px);
    box-shadow:0 0 25px rgba(255,106,0,.3);
}

nav h2{color:#ff6a00;}

.logout{
    padding:10px 24px;
    border:none;
    border-radius:30px;
    background:linear-gradient(90deg,#ff6a00,#ff8c00);
    color:white;
    cursor:pointer;
}

/* dashboard card */
.container{
    width:90%;
    max-width:900px;
    margin:70px auto;
}

.card{
    background:rgba(255,255,255,0.06);
    backdrop-filter:blur(20px);
    padding:40px;
    border-radius:25px;
    box-shadow:0 0 50px rgba(255,106,0,.35);
    text-align:center;
}

.card h1{
    margin-bottom:15px;
    color:#ff6a00;
}

.card p{
    opacity:.8;
    margin-bottom:30px;
}

/* buttons */
.btn{
    padding:14px 35px;
    border:none;
    border-radius:30px;
    background:linear-gradient(90deg,#ff6a00,#ff8c00);
    color:white;
    font-weight:bold;
    cursor:pointer;
    margin:10px;
    transition:.3s;
}

.btn:hover{
    transform:scale(1.05);
    box-shadow:0 0 25px #ff6a00;
}
</style>
</head>

<body>

<nav>
<h2>FixMyRide</h2>
<form action="logout.php" method="POST">
<button class="logout">Logout</button>
</form>
</nav>

<div class="container">

<div class="card">

<h1>Mechanic Dashboard</h1>
<p>You are now online and visible to users.</p>

<a href="map.html">
<button class="btn">Open Service Map</button>
</a>

<a href="select-problem.html">
<button class="btn">View Service Requests</button>
</a>

</div>

</div>

</body>
</html>
