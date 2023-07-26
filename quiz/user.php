<?php
session_start();

include("connection.php");
if (!isset($_SESSION["username"])){
    header("Location: index.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="quiz.css">
</head>
<body>
    <h2>Welcome  <?php echo $_SESSION['name']?><br><br><br>
    <h2>Take The Quiz Now</h2>
    <button class="btn" onclick="window.location.href='q1.php'">GO</button><br><br><br>
    <h2>View Your Previous Scores</h2>
    <button class="btn" onclick="window.location.href='scorehistory.php'">View</button><br><br><br>


    <button class="btn" onclick="window.location.href='logout.php'">Logout</button>
</body>
</html>