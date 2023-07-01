<?php
$con = mysqli_connect('localhost:3306','admin','MyNewPass','dhruvaldb');
$sql = $con -> prepare('SELECT * FROM user WHERE id = ?');
$table = 11;
$sql -> bind_param('i', $table);
$sql -> execute();
$result = $sql -> get_result();
print_r($result);
echo $res instanceof mysqli_result;

$json = '{"a":1,"b":2,"c":3,"d":4,"e":5}';

print_r(json_decode($json, false));
print_r(json_decode($json, true));