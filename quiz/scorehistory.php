<?php
session_start();
include("connection.php");

if (!isset($_SESSION["username"])){
  header("Location: index.php");
}else{
    $username=$_SESSION["username"];  
 
    $sql = "SELECT name, score, date FROM user_scores WHERE username='$username'";
    $result = $con->query($sql);

    if ($result->num_rows > 0) {
      echo "<table><tr><th>Name</th><th>Score</th><th>Date</th></tr>";
      while($data = $result->fetch_assoc()) {
        echo "<tr><td>".$data["name"]."</td><td>".$data["score"]."</td><td>".$data["date"]."</td></tr>";
      }
      echo "</table>";
    } else {
      echo "<p class='warning'>No scores found </p><br>";
    }
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
    <button class="btn" onclick="window.location.href='index.php'">Back</button>
</body>
</html>