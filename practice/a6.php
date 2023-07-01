<?php
$a=[1,2,3,4,5,5];
foreach($a as $k => $v){
    echo $k,$v,"<br>";
}
echo "<pre>";
print_r(getenv());
echo "</pre>";

if(isset($_POST['sub1'])){
    echo "alert('aaaaa')";
    echo "<pre>";
    print_r($_FILES['file']);
    echo "</pre>";

    $co = count($_FILES['file']['name']);
   
    for($i=0;$i<$co;$i++){
        if(move_uploaded_file($_FILES['file']['tmp_name'][$i],'files/'.basename($_FILES['file']['name'][$i]))){
            echo realpath($_FILES['file']['tmp_name'][$i])."<br>";
            echo $_FILES['file']['name'][$i]."uploaded succesfully<br>";
        }else{
            echo $_FILES['file']['error'][$i];
        }
    }
    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    img{
        width:80px;
        height:80px;
    }
</style>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" multiple name="file[]"><br>
        <input type="submit" value="sub" name="sub1">
    </form>
    <?php
    $co = count($_FILES['file']['name']);
   
    for($i=0;$i<$co;$i++){
    ?>
    <img src="files/<?php echo $_FILES['file']['name'][$i]; ?>"/>
    <?php } ?>
</body>
</html>