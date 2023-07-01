<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
// static $a=1;
// $b=2;
// $c=3;
// $a=10;
// $a++;
// {
//     define("msg","Hello");
// }
// echo __LINE__;
// define("__LINE__","dhruval");
// echo __LINE__;
// //print $a,$b,$c;
// for ($i =1; $i<=3; $i++) {  
//     //inner loop  
//     for ($j=1; $j<=3; $j++) {  
//         if (!($i == $j) ) {  
//             continue;       //skip when i and j does not have same values  
//         }  
//         echo $i.$j;  
//         echo "</br>";  
//     }  
// }  
// function add(...$num){
//     print_r($num);
// }
// add(1,2,3);
// echo "fderferfer \n erer";

// $str= <<< 'DEMO'
// It is the example   
// of multiple  $c \n
// lines of text 
// DEMO;  
// echo $str;
  
// $str = "Hello World!";  
// echo "Your string is :".$str."<br>";  
// echo "By using 'chop()' Functions is your string is: ".chop($str,"World!");  

$emp=array("alice"=>1,"bob"=>2,"sujata"=>5,"sunita"=>1);
$c=array();
$name=array();
$count=0;
foreach($emp as $key=>$val){
    $name[$count++]=$key;
    $c[$count-1]=$val;
}
$a=$c;
print_r($a);

sort($c);
    // print_r($a);

$b=array();
for($i=0 ;$i<count($a) ;$i++){
    $b[strval($a[strval($i)])]=0;
}

$gift=array();
$x=1;
for($i=0;$i<count($c)-1;$i++){
    $gift[$i]=$x;
    if($c[$i]!=$c[$i+1]){
        $x++;
    }
    $b[strval($c[$i])]=$gift[$i];
}
$gift[$i]=$x;
$b[strval($c[$i])]=$gift[$i];
// print_r($gift);
// print_r($b);
$t=0;
foreach($a as $k){
    $t += $b[$k];
}
echo "</br>";   
echo "total gifts ".$t."</br>";
for($i=0 ;$i<count($a) ;$i++){
echo $name[$i]." will get ".$b[$a[$i]]." gift </br>";

}

?>
<? echo "hello"; ?>
<?= "Hello"; ?>
<? echo "<pre>";
print_r($_SERVER);
echo "</pre>"; ?>
<? echo "<pre>";
print_r(getenv());
echo "</pre>"; ?>
</body>
</html>