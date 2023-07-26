<?php
session_start();

include('connection.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username=$_POST["username"];  
    $password=$_POST["password"];
    $cpassword=$_POST["cpassword"];
    $name=$_POST["name"];
    
    $sql = "SELECT * FROM user_info WHERE username = '$username'"; 
    $result=$con->query($sql);
    $count=$result->num_rows;
    if($count == 1){  
        echo "<h2 class='warning'> User already exists</h2>";
    }else{
        if($cpassword!==$password)  {
            echo "<h2 class='warning'> Passwords does not match</h2>";
        }else{
            $sql = "INSERT INTO user_info (username, password, name,role)
            VALUES ('$username', '$password', '$name','user')";
            $con->query($sql);
            header("Location: index.php");
        }
    } 
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="quiz.css">
</head>
<body>
    <form action="" method="post" id="loginform">
        <p> Welcome! Please enter the following details to create your new account</p> <br>
        <label>Username:</label>
        <input type="text" name="username" required><br>
        <label>Name:</label>
        <input type="text" name="name" required><br>
        <label>Password:</label>
        <input type="password" name="password" required><br>
        <label>Confirm Password:</label>
        <input type="password" name="cpassword" required><br>
        <input type="submit" class="btn">
        <button class="btn" onclick="window.location.href='index.php'">Back</button>
</form>

</body>
</html>