<?php
session_start();
$_SESSION['id']=1;
echo $_SESSION['id']."<br>";

readfile('a1.txt');
$x=fopen('a1.txt','r');
echo fread($x,filesize('a1.txt'));
print_r(file('a1.txt'));
echo file_get_contents('a1.txt');