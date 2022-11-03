<?php
    include_once 'header.php'
?>

<section>
    <div class="container-fluid d-flex flex-column justify-content-center align-items-center" style="height: 75vh">
    <h3>Login</h3>
    <?php
        if(isset($_GET["error"])) {
            if($_GET["error"] == "emptyinput"){
                echo "<small class='text-danger'> Please fill in all fields</small>";
            }
            else if($_GET["error"] == "wronglogin"){
                echo "<small class='text-danger'> Incorrect username or password! </small>";
            }
        }
    ?>
    <form class="d-flex flex-column" action="includes/login.inc.php" method="post">
        <input class="form-control my-2" type="text" name="uid" placeholder="Username/Email">
        <input class="form-control my-2" type="password" name="pwd" placeholder="Password...">
        <button class="btn btn-primary my-2" type="submit" name="submit">Login</button>
    </form>
    <p>
    Don't have an account? <span><a href="signup.php">Sign up here</a></span>
    </p>
</div>

</section>

<?php
    include_once 'footer.php'
?>