<?php
session_start();
$_SESSION["page"]="q2.php";

if (!isset($_SESSION["username"]) || !isset($_SESSION["q1ans"])) {
  header("Location: index.php");
} else {
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!isset($_POST["q2ans"])) {
      echo "<p class='warning'>Please select an answer</p><br>";
    } else {
      $q2ans = $_POST["q2ans"];
      $_SESSION["q2ans"] = $q2ans;
      $q2correct = "Network Address Translation";
      $_SESSION["q2correct"] = $q2correct;
      header("Location: q3.php");
    }
  }
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question 2</title>
    <link rel="stylesheet" href="quiz.css">
</head>
<body>

<form action="" method="post">
<p class="question">What is NAT?</p><br>
    <label>Network Address Translation</label>
    <input type="radio" name="q2ans" value="Network Address Translation"><br>
    <label>Network Administration Tool</label>
    <input type="radio" name="q2ans" value="Network Administration Tool"><br>
    <label>Novell Address Transfer</label>
    <input type="radio" name="q2ans" value="Novell Address Transfer"><br>
    <label>Newly Added Technology</label>
    <input type="radio" name="q2ans" value="Newly Added Technology"><br>
    <input class="btn" type="submit" value="Next">
</form>
<button class="btn" onclick="window.location.href='home.php'">Home</button>
<button class="btn" onclick="window.location.href='logout.php'">Logout</button>


</body>
</html>