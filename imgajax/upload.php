<?php
echo "<pre>";
print_r($_FILES['file']);
echo "</pre>";

$co = count($_FILES['file']['name']);
   
for($i=0;$i<$co;$i++){
    if(move_uploaded_file($_FILES['file']['tmp_name'][$i],'file/'.basename($_FILES['file']['name'][$i]))){
        echo realpath($_FILES['file']['tmp_name'][$i])."<br>";
        echo $_FILES['file']['name'][$i]."uploaded succesfully<br>";
    }else{
        echo $_FILES['file']['error'][$i];
    }
}