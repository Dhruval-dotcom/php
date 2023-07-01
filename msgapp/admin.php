<?php
require 'conn.php';
$sql = 'TRUNCATE TABLE msg';
if (mysqli_query($conn, $sql)){
    header('Location: index.php'); 
}