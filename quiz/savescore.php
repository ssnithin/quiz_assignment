<?php
session_start();
include("connection.php");

if (!isset($_SESSION["username"])){
    header("Location: index.php");
}else{
    $username=$_SESSION["username"];  
    $name=$_SESSION["name"];
    $score=$_SESSION["score"];
    $date=date("d-m-Y h:i:sa");

    $sql = "INSERT INTO user_scores (username,name,score,date)
    VALUES ('$username', '$name', '$score', '$date')";
    $con->query($sql);

    echo "Score successfully saved <br>";
    session_destroy();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Save Score</title>
    <link rel="stylesheet" href="quiz.css">
</head>
<body>
    <button class="btn" onclick="window.location.href='index.php'">Home</button>
</body>
</html>