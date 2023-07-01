<?php
    if(isset($_POST['submit'])){
        require 'conn.php';
        $date = $_POST['date'];
        $detail = $_POST['detail'];
        $file = implode('|', $_FILES['file']['name']);

        $i=0;
        foreach($_FILES['file']['tmp_name'] as $fil){
            if(move_uploaded_file($fil,'file/'. $_FILES['file']['name'][$i++])){
                //
            } else {
                echo "error in uploading";
            }
        }

        $sql = "INSERT INTO bloguse (detail,image,date) VALUES ('$detail' , '$file', '$date')";

        if(mysqli_query($conn, $sql)){
            header('Location: table.php');
        }
        echo mysqli_error($conn);
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
    <a href="table.php" class="btn btn-primary">Table</a>
    <form action="" method="post" enctype="multipart/form-data">
        <br><br>
        <div class="mb-3">
            <input class="form-control" name="file[]" type="file" id="formFileMultiple" multiple>
        </div>
        <div class="form-floating">
            <textarea name="detail" class="form-control" placeholder="Leave a comment here" id="floatingTextarea2"
                style="height: 100px"></textarea>
            <label for="floatingTextarea2">Comments</label>
        </div>
        <input type="text" id="date" name="date" style="display:none;"><br><br>
        <button class="glow-on-hover" type="submit" name="submit" type="button">Submit</button>
    </form>
</body>
<script>
    const d = new Date();
    const month = ['Jan','Feb','Mar','Apr','May','June','July','Aug','Sep','Oct','Nov','Dec'];
    hour = d.getHours() > 12 ? ( d.getHours() - 12 + ':' + d.getMinutes() +' pm' ) : ( d.getHours() + ':' + d.getMinutes() +' am') ;
    date = d.getDate() + ' ' + month[d.getMonth()] + ' ' +  hour;
    document.getElementById('date').value = date;
</script>
</html>