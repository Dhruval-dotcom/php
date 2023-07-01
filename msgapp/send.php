<?php
$conn=mysqli_connect('localhost:3306','admin','MyNewPass','dhruvaldb');
$msg = $_POST['msg'];
$sql = "INSERT INTO msg(detail) VALUES('{$msg}')";
if(mysqli_query($conn, $sql)){
    echo "1";
} else {
    echo "0";
}