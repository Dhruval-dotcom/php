<?php
echo "Hello";
echo "Hello";
echo "Hello";
echo $a;

error_clear_last();

$conn = mysqli_connect('localhost:3306','admin','MyNewPass','customer_database');
$sql="select * from user";
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_assoc($result)) {
    echo "id: " . $row["id"]. " - Name:". $row['name'] ." email " .$row['email']. " mobile " .$row['mobile'] ." <br>";
}
?>