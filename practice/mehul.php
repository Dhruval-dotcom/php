<?php
// ECHO $_REQUEST['username'];
// echo $_GET['username'];
// ECHO $_POST['username'];
// ECHO $_REQUEST['username'];
echo $_ENV['USER']. " <pre>";
print_r(ini_get());
phpinfo();