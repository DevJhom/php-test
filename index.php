<?php
    include_once 'header.php'
?>

<section>
    <div class="container-fluid d-flex flex-column justify-content-center align-items-center" style="height: 77vh">
        <?php
            if(!isset($_SESSION["useruid"])){
                header("location: login.php");
                exit();
            }

            include_once 'includes/dbhandler.inc.php';

            $uid = $_SESSION["useruid"];

            $sql = "SELECT * FROM users WHERE usersName = '$uid';";
            $result = mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result);

            if($resultCheck > 0){
                $row = mysqli_fetch_assoc($result);
            }

            echo '<h3> Hello, '.$row['usersName'].'!</h3>';
        ?>
        <br>
        <p>Welcome to AAS Shipping.</p>
    </div>
</section>

<?php
    include_once 'footer.php'
?>