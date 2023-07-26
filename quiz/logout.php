<?php
session_start();
session_destroy();
echo 'You have been logged out. <br>';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout</title>
    <link rel="stylesheet" href="quiz.css">
</head>
<body>
    <button class="btn" onclick="window.location.href='index.php'">Home</button>
</body>
</html>