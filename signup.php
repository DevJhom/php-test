<?php
    include_once 'header.php';
?>

<section>
<div class="container-fluid d-flex flex-column justify-content-center align-items-center" style="height: 77vh">
    <h3>Create an account</h3>
    <?php
        if(isset($_GET["error"])) {
            if($_GET["error"] == "emptyinput"){
                echo "<small class='text-danger'> Please fill in all fields</small>";
            }
            else if($_GET["error"] == "invaliduid"){
                echo "<small class='text-danger'> Choose a proper username! </small>";
            }
            else if($_GET["error"] == "invalidemail"){
                echo "<small class='text-danger'> Please enter a valid email! </small>";
            }
            else if($_GET["error"] == "pwdsnotmatch"){
                echo "<small class='text-danger'> Passwords not match! </small>";
            }
            else if($_GET["error"] == "stmtfailed"){
                echo "<small class='text-danger'> Something went wrong! Please try again </small>";
            }
            else if($_GET["error"] == "usernametaken"){
                echo "<small class='text-danger'> User already taken. Please choose another username </small>";
            }
            else if($_GET["error"] == "none"){
                header("location: index.php?error=emptyinput");
                exit();
            }
        }
    ?>

    <form class="d-flex flex-column w-25" action="includes/signup.inc.php" method="post">
        <input class="form-control my-2" type="text" name="name" placeholder="Full name...">
        <input class="form-control my-2" type="text" name="email" placeholder="Email...">
        <input class="form-control my-2" type="text" name="uid" placeholder="Username...">
        <input class="form-control my-2" type="password" name="pwd" placeholder="Password...">
        <input class="form-control my-2" type="password" name="pwdrepeat" placeholder="Reenter Password...">
        <button class="btn btn-primary my-2" type="submit" name="submit">Sign Up</button>
    </form>
    <small>
    Already have an account? <span><a href="login.php">Log in here</a></span>
    </small>

    </div>
</section>

<?php
    include_once 'footer.php';
?>