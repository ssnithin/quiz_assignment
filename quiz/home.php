<?php
session_start();
unset($_SESSION['page']);
header("Location:index.php")
?>