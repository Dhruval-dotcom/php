<?php
print_r($_POST);
for($i=0;$i<1000000000;$i++){
    //
}
if(move_uploaded_file ($_FILES['file']['tmp_name'] , 'file/'.basename($_FILES['file']['name']) ) ){
    echo "<span style='color:blue;'>Image uploaded succesfully</span> <br><br><img width='300px' src='file/" . $_FILES['file']['name'] . "'/>";
}