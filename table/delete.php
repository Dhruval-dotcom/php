<?php
include_once "conn.php";
$x=intval($_POST['id']);
$sql="DELETE FROM user WHERE id={$x}";
if(mysqli_query($conn,$sql)){
    echo "1";
}else{
    echo "0";
}