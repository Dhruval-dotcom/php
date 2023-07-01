<?php


$conn=mysqli_connect('localhost:3306','admin','MyNewPass','dhruvaldb');
session_start();
$sql = "SELECT * FROM msg ORDER BY id DESC";
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_assoc($result)){

?>
 <div class="sender">
            <div><img src="<?= $_SESSION['img'] ?>" class="avtar" alt=""></div>
            <div class="message-rcvr">
                <h6><?= $_SESSION['name'] ?></h6>
                <?php echo $row['detail']; ?>
            </div>
        </div><br>
<?php } ?>