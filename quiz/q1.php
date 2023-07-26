<?php
session_start();
$_SESSION["page"]="q1.php";

if (!isset($_SESSION["username"])){
  header("Location: index.php");
  }else{
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      if (!isset($_POST["q1ans"])){
        echo "<p class='warning'>Please select an answer</p><br>";
      }else{
        $q1ans = $_POST["q1ans"];
        $_SESSION["q1ans"]=$q1ans;
        $q1correct="OS-2";
        $_SESSION["q1correct"]=$q1correct;
        header("Location: q2.php");
      }
  }
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question 1</title>
    <link rel="stylesheet" href="quiz.css">
</head>
<body>

<?php
echo "Hi, ". $_SESSION["name"];
?>

<form action="" method="post" class="qform">
    <p class="question">Which of the following operating systems is produced by IBM?</p><br>
    <label>OS-2</label><input type="radio" name="q1ans" value="OS-2"><br>
    <label>Windows</label><input type="radio" name="q1ans" value="Windows"><br>
    <label>DOS</label><input type="radio" name="q1ans" value="DOS"><br>
    <label>UNIX</label><input type="radio" name="q1ans" value="UNIX"><br>
    <input class="btn" type="submit" value="Next">
</form>
<button class="btn" onclick="window.location.href='home.php'">Home</button>
<button class="btn" onclick="window.location.href='logout.php'">Logout</button>

</body>
</html>