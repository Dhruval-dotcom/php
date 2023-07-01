<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="number" name="x">
        <input type="number" name="y">
        <input type="button" name="sub" value="sub" type="submit">
    </form>
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

function fun($a,$b,$c=NULL,$d,$e)
{

}

fun(10,20,30,40);

function fun2($a,$b,$c=NULL,$d,$e)
{

}

fun2(10,20,30,40);

if(isset($_POST['sub'])){
    $first=$_POST['x'];
    $sec=$_POST['y'];

    echo $first;
    $c=[1,2,2,3,5,1,1,7,1];
    $a=$c;
    sort($c);

    $b=array();
    for($i=0 ;$i<count($a) ;$i++){
        $b[strval($a[$i])]=0;
    }


    $x=$first;
    for($i=0;$i<count($c)-1;$i++){
        
        $b[strval($c[$i])]=$x;
        if($c[$i]!=$c[$i+1]){
            $x+=$sec;
        }
    }
    $b[strval($c[$i])]=$x;


    $t=0;
    foreach($a as $k){
        echo "$k"." ";
        $t += $b[$k];
    }
    echo "</br>";   
    echo "total gifts ".$t."</br>";
    for($i=0 ;$i<count($a) ;$i++){
        echo $a[$i]." will get ".$b[$a[$i]]." gifts </br>";
    }
}

?>
</body>
</html>