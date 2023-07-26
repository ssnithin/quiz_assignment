<?php
session_start();
if (!isset($_SESSION["username"])){
    header("Location: index.php");
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Results</title>
    <link rel="stylesheet" href="quiz.css">
</head>
<body>

<?php 
echo "<div id='scoredisplay'>";
echo "<p>The answer you have selected for 1st question is ". $_SESSION["q1ans"];
echo ". The correct answer for 1st question is ". $_SESSION["q1correct"]."</p>";
if ($_SESSION["q1ans"]===$_SESSION["q1correct"]){
    $_SESSION["score"]=1;
  }else{
    $_SESSION["score"]=0;
  }
echo "<p>The answer you have selected for 2nd question is ". $_SESSION["q2ans"];
echo ". The correct answer for 2nd question is ". $_SESSION["q2correct"]."</p>";
if ($_SESSION["q2ans"]===$_SESSION["q2correct"]){
    $_SESSION["score"]+=1;
  }
echo "<p>The answer you have selected for 3rd question is ". $_SESSION["q3ans"];
echo ". The correct answer for 3rd question is ". $_SESSION["q3correct"]."</p>";
if ($_SESSION["q3ans"]===$_SESSION["q3correct"]){
    $_SESSION["score"]+=1;
  }
echo "<p>The answer you have selected for 4th question is ". $_SESSION["q4ans"];
echo ". The correct answer for 4th question is ". $_SESSION["q4correct"]."</p>";
if ($_SESSION["q4ans"]===$_SESSION["q4correct"]){
    $_SESSION["score"]+=1;
  }

echo "<p>Your total score is ".$_SESSION["score"]." out of 4</p>";

?>

<button class="btn" onclick="window.location.href='home.php'">Home</button>
<button class="btn" onclick="window.location.href='savescore.php'">Save Score</button>
<button class="btn" onclick="window.location.href='logout.php'">Logout</button>

<?php
echo "</div>"
?>


</body>
</html>
    