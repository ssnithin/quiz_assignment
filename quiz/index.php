<?php
session_start();

include('connection.php');
if (isset($_SESSION["page"])){
    header("Location:$_SESSION[page]");
}else{
    if (!isset($_SESSION["username"])){
        if ($_SERVER["REQUEST_METHOD"] == "POST") {  
            $username = $_POST['username'];  
            $password = $_POST['password'];  
              
            $username = stripcslashes($username);  
            $password = stripcslashes($password);  
            $username = mysqli_real_escape_string($con, $username);  
            $password = mysqli_real_escape_string($con, $password);  
              
            $sql = "SELECT * FROM user_info WHERE username = '$username' AND password = '$password'";  
            $result =$con->query($sql);    
            $count = $result->num_rows;
    
                  
            if($count == 1){ 

                $_SESSION["username"]=$username;
                while($data = $result->fetch_assoc()){
                    $_SESSION["name"]=$data["name"];
                    $_SESSION["role"]=$data["role"];
                };
                if($_SESSION["role"]=="superadmin"){
                    header("Location: superadmin.php");
                }elseif($_SESSION["role"]=="admin"){
                    header("Location: admin.php");
                }else{
                    header("Location: user.php");
                }
                
            }else{  
                echo "<h2 class='warning'> Login failed. Invalid username or password.</h2>";  
            }  
        } 
    }else{
        if($_SESSION["role"]=="superadmin"){
            header("Location: superadmin.php");
        }elseif($_SESSION["role"]=="admin"){
            header("Location: admin.php");
        }else{
            header("Location: user.php");
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz</title>
    <link rel="stylesheet" href="quiz.css">
</head>
<body>
    
    <form action="" method="post" id="loginform">
        <h1>LOGIN</h1><br>
        <label>Username:</label>
        <input class="input" type="text" name="username" required><br>
        <label>Password:</label>
        <input class="input" type="password" name="password" required><br>
        <input class= "btn" type="submit" value="Sign In"><br>
        <button class="btn" onclick="window.location.href='register.php'">Register</button>
    </form>
</body>
</html>