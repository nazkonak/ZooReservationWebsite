<?php
session_start();
include "connect.php";
?>
<!DOCTYPE html>
<html lang ="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width = device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div style="text-align:center; padding: 15%;">
        <p style = "font-size: 50px; font-weight: bold;">
        Hello<?php
        if(isset($_SESSION['email'])){
            $email=$_SESSION['email'];
            $query=mysqli_query($conn, "SELECT users. *FROM'users' where users.email= '$email'");
            while($row= mysqli_fetch_array($query)){
                echo $row['firstName'].' '.$row['lastName'];
            }
        }
        ?>

