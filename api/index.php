<?php

header('Content-Type: application:json');
header('Access-Control-Allow-Origin: *');
$data = json_decode(file_get_contents("php://input"), true);
$student_id = $data['sid'];
$conn = mysqli_connect('localhost','admin','MyNewPass','dhruvaldb');
$sql = "select * from practiceajax where id = {$student_id}";
$res = mysqli_query($conn,$sql);
echo json_encode(mysqli_fetch_assoc($res)); 
