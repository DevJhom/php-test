<?php
    include_once 'header.php'
?>

<section>
    <h3>Login</h3>
    <form action="includes/login.inc.php" method="post">
        <input type="text" name="uid" placeholder="Username/Email">
        <input type="password" name="pwd" placeholder="Password...">
        <button type="submit" name="submit">Login</button>
    </form>
    <?php
        if(isset($_GET["error"])) {
            if($_GET["error"] == "emptyinput"){
                echo "<p> Please fill in all fields</p>";
            }
            else if($_GET["error"] == "wronglogin"){
                echo "<p> Incorrect username or password! </p>";
            }
        }
    ?>
</section>

<?php
    include_once 'footer.php'
?>