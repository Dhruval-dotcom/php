<?php
require_once 'conn.php';
session_start();
$str = implode("|",$_POST['ids']);
$user = $_SESSION['name'];

$sql = "UPDATE cart SET cartitem= CONCAT_WS('|', cartitem , '$str' ) WHERE username = '$user' ";
if(mysqli_query($conn,$sql)){
    echo "1";
}else {
    echo "0";
}