<?php
$ip = $_SERVER['REMOTE_ADDR'];
session_start();

$_SESSION['name'] = ($ip == "14.99.102.226" || $ip == "42.106.9.3") ? 'Dhruval' : 'Vimal';

$conn=mysqli_connect('localhost:3306','admin','MyNewPass','dhruvaldb');

$sql = "SELECT * FROM msguser WHERE ip='{$ip}'";

if ($result=mysqli_query($conn,$sql))
  {
  $rowcount=mysqli_num_rows($result);
  if($rowcount == 1){
    $row = mysqli_fetch_assoc($result);
    $id = $row['id'];
    $id = $id%4 + 1;
    $img = ( $id == 1 || $id == 4 ) ? ('css/p'.$id.'.avif') : ( $id == 2 ? 'css/p2.jpg' : 'css/p4.png' ); 
  } else {
    $sql2 = "INSERT INTO msguser (ip) VALUES ('{$ip}')";
    mysqli_query($conn, $sql2);
    $id = mysqli_insert_id($conn);
    $img = ( $id == 1 || $id == 4 ) ? ('p'.$id.'.avif') : ( $id == 2 ? 'p2.jpg' : 'p4.png' ); 
  }
  $_SESSION['img'] = $img;
  }
  
  ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <div class="mx-auto mt-3 col-10 col-md-8 col-lg-6">
        <div class="input-group">
            <input id="msg" placeholder="Type a Message" type="text" class="form-control" aria-label="Dollar amount (with dot and two decimal places)">
            <span class="input-group-text"><button id="submit" class="send"><img class="msg-img" src="css/send-svgrepo-com.svg"
                        alt=""></button></span>
        </div>
    </div>
    <div class="mx-auto mt-3 col-10 col-md-8 col-lg-6">
        <div id="target"></div>
        <div class="sender">
            <div><img src="css/p1.avif" class="avtar" alt=""></div>
            <div class="message-rcvr">
                <h6>Vimal</h6>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus reprehenderit, vero minus
                asperiores
                um sed.ehenderit atque ab illum quod pariatur eos sapiente tenetur quia quam, neque eum?
            </div>
        </div><br>
        <div class="sender">
            <div><img src="css/p2.jpg" class="avtar" alt=""></div>
            <div class="message-rcvr">
                <h6>Vimal</h6>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus reprehenderit, vero minus
                anderit atque ab illum quod pariatur eos sapiente tenetur quia quam, neque eum?
            </div>
        </div><br>
        <div class="sender">
            <div><img src="css/p3.png" class="avtar" alt=""></div>
            <div class="message-rcvr">
                <h6>Vimal</h6>
                Lorem ipsuriaturm, neque eum?
            </div>
        </div><br>
        <div class="sender">
            <div><img src="css/p1.avif" class="avtar" alt=""></div>
            <div class="message-rcvr">
                <h6>Vimal</h6>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus reprehenderit, vero minus
                asperit atque ab illum quod pariatur eos sapiente tenetur quia quam, neque eum?
            </div>
        </div><br>
        <div class="sender">
            <div><img src="css/p4.avif" class="avtar" alt=""></div>
            <div class="message-rcvr">
                <h6>Vimal</h6>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus reprehenderit, vero minus
                aspderit atque ab illum quod pariatur eos sapiente tenetur quia quam, neque eum?
            </div>
        </div><br>
        <div class="sender">
            <div><img src="css/p1.avif" class="avtar" alt=""></div>
            <div class="message-rcvr">
                <h6>Vimal</h6>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus reprehenderit, vero minus
                asperiores
                um sed.ehenderit atque ab illum quod pariatur eos sapiente tenetur quia quam, neque eum?
                <span class="time">3:00 am</span>
            </div>
        </div><br>

    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="index.js"></script>
</body>

</html>