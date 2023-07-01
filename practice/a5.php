<?php
    echo $_POST['inp']."<br>";
    $x=count_chars($_POST['inp'],1);
    $arr=array();
    $xx='a';
    for($i=1;$i<=26;$i++)$arr[$xx++]=0;
    foreach($x as $key=>$val){
        $arr[chr($key)]=$val;
        echo chr($key)." occurs $val times<br>";
    }
    foreach($arr as $key=>$val)echo ($key)." occurs $val times<br>";
?>
