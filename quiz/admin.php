<?php
session_start();

include("connection.php");
if ($_SESSION["role"]!=="admin"){
    header("Location: index.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Superadmin Dashboard</title>
        <link rel="stylesheet" href="quiz.css">
    </head>
    <body>
        <h2>Take The Quiz Now</h2>
        <button class="btn" onclick="window.location.href='q1.php'">GO</button><br><br><br>
        <h2>Manage User Scores
        <table>
            <tr>
            <th>Name</th>
            <th>Score</th>
            <th>Date</th>
            <th> Action </th>
            </tr>   

            <?php
                $sql = "SELECT * FROM user_scores";  
                $result =$con->query($sql);    
                $count = $result->num_rows;
                while($data = $result->fetch_assoc()){
                    echo "<tr>";
                    echo "<td>".$data['name']."</td>";
                    echo "<td>".$data['score']."</td>";
                    echo "<td>".$data['date']."</td>";
                    echo "<td><a href='delete.php?id=".$data['id']."'>Delete</a></td>";
                    echo "</tr>";
                }
            ?>
        </table>
        <button class="btn" onclick="window.location.href='logout.php'">Logout</button>
    </body>
</html>