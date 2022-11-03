<?php
    include_once 'header.php'
?>

<section>
    <div class="container-fluid d-flex flex-column justify-content-center align-items-center" style="height: 77vh">
        <table class="table container w-25">
        <tbody>
        <?php
            include_once 'includes/dbhandler.inc.php';

            $uid = $_SESSION["useruid"];

            $sql = "SELECT * FROM users WHERE usersName = '$uid';";
            $result = mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result);

            if($resultCheck > 0){
                $row = mysqli_fetch_assoc($result);
            }

            echo '<tr>
                    <th scope="row">Full Name:</th>
                    <td>'.$row['usersFullName'].'</td>
                  </tr>';

            echo '<tr>
                    <th scope="row">Userame:</th>
                    <td>'.$row['usersName'].'</td>
                  </tr>';

            echo '<tr>
                    <th scope="row">Email:</th>
                    <td>'.$row['usersEmail'].'</td>
                  </tr>';
        ?>
        </tbody>
        </table>
    </div>
</section>

<?php
    include_once 'footer.php'
?>