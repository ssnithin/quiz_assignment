<?php
session_start();
include('connection.php');

$id = $_GET['id'];
$sql = "DELETE FROM user_scores WHERE id = $id"; 

if (mysqli_query($con, $sql)) {
    header('Location: index.php'); 
    exit;
} else {
    echo "Error deleting record";
}
?>