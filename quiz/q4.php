<?php
session_start();
$_SESSION["page"]="q4.php";

if (!isset($_SESSION["username"]) || !isset($_SESSION["q3ans"])){
  header("Location: index.php");
  }else{
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      if (!isset($_POST["q4ans"])){
        echo "<p class='warning'>Please select an answer</p><br>";
      }else{
        $q4ans = $_POST["q4ans"];
        $_SESSION["q4ans"]=$q4ans;
        $q4correct="SpaceX";
        $_SESSION["q4correct"]=$q4correct;
        header("Location: finalscreen.php");        
      }
    }
  }

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question 4</title>
    <link rel="stylesheet" href="quiz.css">
</head>
<body>

<form action="" method="post">
    <p class="question">Starlink is a satellite internet constellation designed and manufactured by which company?</p><br>
    <label>Amazon</label>
    <input type="radio" name="q4ans" value="Amazon"><br>
    <label>SpaceX</label>
    <input type="radio" name="q4ans" value="SpaceX"><br>
    <label>Blue Origin</label>
    <input type="radio" name="q4ans" value="Blue Origin"><br>
    <label>Apple</label>
    <input type="radio" name="q4ans" value="Apple"><br>
    <input class="btn" type="submit" value="Next">
</form>
<button class="btn" onclick="window.location.href='home.php'">Home</button>
<button class="btn" onclick="window.location.href='logout.php'">Logout</button>

</body>
</html>