<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css"/>
    <title>AAS Shipping</title>
</head>
<body>
    <h1>Header Section</h1>
    <?php
        if(isset($_SESSION["useruid"])){
            echo "<a href='profile.php'>Profile Page</a>";
            echo "<a href='includes/logout.inc.php'>Logout</a>";
        }else{
            echo "<a href='login.php'>Login</a>";
            echo "<a href='signup.php'>Signup</a>";
        }
    ?>