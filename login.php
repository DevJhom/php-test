<?php
    include_once 'header.php'
?>

<section>
    <h3>Login</h3>
    <form action="includes/login.inc.php" method="post">
        <input type="text" name="name" placeholder="Username/Email">
        <input type="password" name="pwd" placeholder="Password...">
        <button type="submit" name="subit">Login</button>
    </form>
</section>

<?php
    include_once 'footer.php'
?>