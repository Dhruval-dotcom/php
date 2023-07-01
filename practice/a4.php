<?php

var_dump(checkdate(12, 31, 2000));
$a=[[1,2,3],2];
print_r($a);
$date = new DateTimeImmutable();
echo $date->getTimestamp();echo "\n";
// set the default timezone to use.
echo date('d m Y h:m:s');
echo "<br>";

$fp = fopen('a1.txt', 'w');//open file in write mode  
fwrite($fp, 'hello ');  
fwrite($fp, 'php file');  
fclose($fp);  
  
echo "File written successfully";
// Read and write for owner, nothing for everybody else
chmod("a1.php", 0007);

echo date('r'); 
setcookie("cook","cooke",time()+1000,"./foo/");
echo "<br>".$_COOKIE['cookie2'];
$str = strtotime("now");

if (($timestamp = strtotime($str)) === false) {
    echo "The string ($str) is bogus";
} else {
    echo "$str == " . date('l dS \o\f F Y h:i:s A', $timestamp);
}