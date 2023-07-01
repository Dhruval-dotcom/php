<?php
$lines = file('a1.txt');
print_r($lines);
echo "1) ".basename("/etc/sudoers.d", ".d").PHP_EOL;
echo "2) ".basename("/etc/sudoers.d")."<br>";
echo base64_encode("user=xyz")."<br>";
echo base64_decode("dXNlcj14eXo=");
setcookie("ccok","cook",time()+1400);
setcookie("ccok1","cook",time()+1400);
setcookie("ccok2","cook",time()+1400);
echo "<pre>";
print_r($_SERVER);
echo "</pre>";
print_r(explode(';',$_SERVER['HTTP_COOKIE']));
// clearstatcache();
// echo disk_total_space("/");
// $x=fopen('a1.txt','r');
// echo fread($x,filesize('a1.txt'));
// fflush($x);
// echo fread($x,filesize('a1.txt'))."here";
// echo filetype('a1.txt');
// file_put_contents('a1.txt', '$current');
$x=[[1,2],[2,3],[2,3]];
$fp=fopen('a1.txt','w');
foreach($x as $y){
    fputcsv($fp,$y);
}
rename('a1.txt','a2.txt');