<?php

$dbName = "aas_shipping";

$conn = mysqli_connect("localhost", "root", "", $dbName);

//check connection
if(!$conn)
    die("Connection failed: " . mysqli_connect_error());
?>