<?php
    $conn = mysqli_connect('localhost:3306','admin','MyNewPass','dhruvaldb');

    $filename = $_FILES['file']['tmp_name'];
    $file = fopen($filename, "r");
    $getData = fgetcsv($file, 10000, ",");
    while (($getData = fgetcsv($file, 10000, ",")) !== FALSE){
        echo "<pre>";
        print_r($getData);
        echo "</pre>";
        $sql = "INSERT INTO csv (fname,lname,email,phone) VALUES ('$getData[1]','$getData[2]','$getData[3]','$getData[4]')";
        if(mysqli_query($conn,$sql)){
            echo $getData[0]." inserted succesfully <br>";
        }
    }
