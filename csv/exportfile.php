<?php
    $conn = mysqli_connect('localhost:3306','admin','MyNewPass','dhruvaldb');
    header('Content-Type: text/csv; charset=utf-8');  
    header('Content-Disposition: attachment; filename=data.csv');  
    $output = fopen("data.csv", "a");
    $sql = 'SELECT * FROM csv';
    $result = mysqli_query($conn,$sql);
    while($row = mysqli_fetch_assoc($result)){
        fputcsv($output,$row);
        echo $row['id']." Inserted succesfully<br>";
    }