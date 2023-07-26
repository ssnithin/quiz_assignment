
<?php
session_start();
$id = $_GET['id'];
$name=$_GET['name'];

include('connection.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!isset($_POST["role"])){
        echo "<p class='warning'>Please assign a role</p><br>";
      }else{
        $role=$_POST['role'];
        $sql = "UPDATE user_info SET role='$role' WHERE id='$id'";
        if (mysqli_query($con, $sql)) {
            header('Location: superadmin.php'); 
            exit;
        } else {
            echo "Error deleting record";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Role</title>
    <link rel="stylesheet" href="quiz.css">
</head>
<body>
    <form action="" method="post">
        <p>Please select the role you want to assign to <?php echo $name?> </p><br>
        <label> User</label><input type="radio" name="role" value="user"><br>
        <label> Admin</label><input type="radio" name="role" value="admin"><br>
        <input class="btn" type="submit" value="Update">
    </form>
    <button class="btn" onclick="window.location.href='superadmin.php'">Back</button>
</body>
</html>