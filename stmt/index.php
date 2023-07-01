<?php
$conn = new mysqli('localhost:3306', 'admin', 'MyNewPass', 'dhruvaldb');


echo '<pre>';
print_r($conn, FALSE);
ECHO print_r($conn, true);
echo '</pre>';

$url = 'http://username:password@hostname:9090/path?arg=value#anchor';
echo "<br> $url <br>";
echo '<pre>';
print_r(parse_url($url));
echo '</pre>';

function fun() :?int {
    return null;
}
echo fun();

$a = array('<foo>',"'bar's'",'"baz"','&blong&', "\xc3\xa9");
// $a = ['a' => 1, 'b' => 2, 'c' => 'Dhruval'];
echo "Normal: ",  json_encode($a), "<br>";
echo "Tags: ",    json_encode($a, JSON_HEX_TAG), "<br>";
echo "Apos: ",    json_encode($a, JSON_HEX_APOS), "<br>";
echo "Quot: ",    json_encode($a, JSON_HEX_QUOT), "<br>";
echo "Amp: ",     json_encode($a, JSON_HEX_AMP), "<br>";
echo "Unicode: ", json_encode($a, JSON_UNESCAPED_UNICODE), "<br>";
echo "All: ",     json_encode($a, JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP | JSON_UNESCAPED_UNICODE), "<br><br>";

$b = array();

echo "Empty array output as array: ", json_encode($b), "<br>";
echo "Empty array output as object: ", json_encode($b, JSON_FORCE_OBJECT), "<br><br>";

$c = array(array(1,2,3));

echo "Non-associative array output as array: ", json_encode($c), "<br>";
echo "Non-associative array output as object: ", json_encode($c, JSON_FORCE_OBJECT), "<br><br>";

$d = array('foo' => 'bar', 'baz' => 'long');

echo "Associative array always output as object: ", json_encode($d), "<br>";
echo "Associative array always output as object: ", json_encode($d, JSON_FORCE_OBJECT), "<br><br>";
// // Check connection
// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }
// // prepare and bind
// $stmt = $conn->prepare("INSERT INTO practiceajax (name, doi, email) VALUES (?, ?, ?)");
// $stmt->bind_param("sss", $firstname, $lastname, $email);

// // set parameters and execute
// $firstname = "Jiya";
// $lastname = "php|js";
// $email = "john@example.com";
// $stmt->execute();

// echo "inserted";

// $conn=mysqli_connect('localhost:3306','admin','MyNewPass','dhruvaldb');
// $sql = "SELECT * FROM user";
// $result = mysqli_query($conn,$sql);
// echo "<pre>";
// print_r(mysqli_fetch_array($result));
// echo "</pre>";
