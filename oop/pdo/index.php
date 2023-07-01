<?php

$db_name = "mysql:host=localhost;dbname=dhruvaldb";

$conn = new pdo($db_name,"admin","MyNewPass");

$sql = $conn->query("SELECT * FROM user");

echo "<pre>";
// print_r($sql->fetch(PDO::FETCH_OBJ));
// print_r($sql);
if($sql instanceOf PDOStatement)
    echo "pf";

echo "<pre>";

// while($row = $sql->fetch(PDO::FETCH_OBJ)){
//     echo "<pre>";
//     print_r($row);
//     echo "<pre><span style='color:red;'>";
//     echo $row->id ." ". $row->name ." ". $row->email ."</span>";
// }


// while($row2 = $sql->fetch(PDO::FETCH_BOTH)){
//     echo "<pre>";
//     print_r($row2);
//     echo "<pre><span style='color:red;'>";
//     echo $row2['id'] ." ". $row2['name'] ." ". $row2['email'] ."</span>";
// }


echo "<pre>";
print_r($sql->fetchAll(PDO::FETCH_ASSOC));
echo "<pre>";

//args that can be passes in fetch and fetchall
//PDO::FETCH_ASSOC
//PDO::FETCH_BOTH
//PDO::FETCH_NUM
//PDO::FETCH_OBJ


$sql = $conn->prepare("SELECT * FROM user WHERE id>?");
$name=2;
$sql->bindParam(1,$name);
$sql->execute();
$result= $sql->fetchall(PDO::FETCH_OBJ);

echo "<pre>";
print_r($result);
echo "<pre>";


