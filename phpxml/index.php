<?php
$xml = simplexml_load_file('stud.xml');

echo '<h2>Stud Listing</h2>';

$list = $xml->stud;
print_r($list);
for ($i = 0; $i < count($list); $i++) {
    echo $list[$i]->attributes()->no;
} 
//LATE BINDING
//