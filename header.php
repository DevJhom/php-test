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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>AAS Shipping</title>
</head>
<body>
<nav class="navbar navbar-dark bg-dark justify-content-between">
  <div class="container">
    <a class="navbar-brand" href="#">AAS Shipping</a>
    <div class="navbar-nav d-flex flex-row justify-content-space-around">
      <!-- <a class="nav-item nav-link active me-4" href="#">Home</a> -->

      <?php
        if(isset($_SESSION["useruid"])){
            echo "<a class='nav-item nav-link me-4' href='profile.php'>Profile Page</a>";
            echo "<a class='nav-item nav-link me-4' href='includes/logout.inc.php'>Logout</a>";
        }else{
            echo "<a class='nav-item nav-link me-4' href='login.php'>Login</a>";
            echo "<a class='nav-item nav-link me-4' href='signup.php'>Signup</a>";
        }
        ?>

    </div>
  </div>
</nav>

