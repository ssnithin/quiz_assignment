<?php
session_start();
$_SESSION["page"]="q3.php";

if (!isset($_SESSION["username"]) || !isset($_SESSION["q2ans"])){
  header("Location: index.php");
  }else{
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      if (!isset($_POST["q3ans"])){
        echo "<p class='warning'>Please select an answer</p><br>";
      }else{
        $q3ans = $_POST["q3ans"];
        $_SESSION["q3ans"]=$q3ans;
        $q3correct="Retrovirus";
        $_SESSION["q3correct"]=$q3correct;
        header("Location: q4.php");
      }
    }
  }

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question 3</title>
    <link rel="stylesheet" href="quiz.css">
</head>
<body>

<form action="" method="post">
    <p class="question">A computer virus that actively attacks an anti-virus program or programs in an effort to prevent detection is...</p><br>
    <label>Worm</label>
    <input type="radio" name="q3ans" value="Worm"><br>
    <label>Retrovirus</label>
    <input type="radio" name="q3ans" value="Retrovirus"><br>
    <label>Trojan</label>
    <input type="radio" name="q3ans" value="Trojan"><br>
    <label>Ghost virus</label>
    <input type="radio" name="q3ans" value="Ghost virus"><br>
    <input class="btn" type="submit" value="Next">
</form>
<button class="btn" onclick="window.location.href='home.php'">Home</button>
<button class="btn" onclick="window.location.href='logout.php'">Logout</button>

</body>
</html>