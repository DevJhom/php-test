<?php
    include_once 'header.php'
?>

<section>
    <div class="container-fluid d-flex flex-column justify-content-center align-items-center" style="height: 75vh">
        <?php
            include_once 'includes/dbhandler.inc.php';

            $uid = $_SESSION["userid"];

            $sql = "SELECT * FROM users WHERE usersId = $uid;";
            $result = mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result);

            if($resultCheck > 0){
                $row = mysqli_fetch_assoc($result);
            }
            echo '<h3> Full Name: '.$row['usersFullName'].'</h3>';
            echo '<h3> Userame: '.$row['usersName'].'</h3>';
            echo '<h3> Email: '.$row['usersEmail'].'</h3>';
        ?>
    </div>
</section>

<?php
    include_once 'footer.php'
?>