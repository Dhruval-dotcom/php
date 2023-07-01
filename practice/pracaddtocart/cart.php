<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
        <br><img src="malecostume-512.webp" width="30px">

        <?php
            require_once "conn.php";
            session_start();
            echo "Hello ".$_SESSION['name']."<br><br>";
            $sql = "SELECT * FROM itemscart";
            $result = mysqli_query($conn,$sql);
            while($row = mysqli_fetch_assoc($result)){
        ?>

        <span><?php echo "Item number ".$row['id']; ?></span>
        
        <button type="button" data-id="<?php echo $row['id']; ?>" 
        class="btn btn-success">Add to cart </button><br><br>
        <?php } ?>
        
        <a href="dummy.html">Go to other page</a>

</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="index.js"></script>
</html>