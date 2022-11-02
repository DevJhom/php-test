<?php
    include_once 'header.php';
?>

<section>
    <h3>Sign up</h3>
    <form action="includes/signup.inc.php" method="post">
        <input type="text" name="name" placeholder="Full name...">
        <input type="text" name="email" placeholder="Email...">
        <input type="text" name="uid" placeholder="Username...">
        <input type="password" name="pwd" placeholder="Password...">
        <input type="password" name="pwdrepeat" placeholder="Repeat Password...">
        <button type="submit" name="submit">Sign Up</button>
    </form>

    <?php
        if(isset($_GET["error"])) {
            if($_GET["error"] == "emptyinput"){
                echo "<p> Please fill in all fields</p>";
            }
            else if($_GET["error"] == "invaliduid"){
                echo "<p> Choose a proper username! </p>";
            }
            else if($_GET["error"] == "invalidemail"){
                echo "<p> Choose a correct username! </p>";
            }
            else if($_GET["error"] == "pwdsnotmatch"){
                echo "<p> Passwords not match! </p>";
            }
            else if($_GET["error"] == "stmtfailed"){
                echo "<p> Something went wrong! Please try again </p>";
            }
            else if($_GET["error"] == "usernametaken"){
                echo "<p> User already taken. Please choose another username </p>";
            }
            else if($_GET["error"] == "none"){
                echo "<p> You have signed up! </p>";
            }
        }
    ?>
</section>

<?php
    include_once 'footer.php';
?>