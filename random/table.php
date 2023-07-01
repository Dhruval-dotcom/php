<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="css/https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
<a href="index.php" type="button" class="btn btn-primary">Form</a><br><br>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Date</th>
                <th scope="col">Detail</th>
                <td>files</td>
                <td>action</td>
            </tr>
        </thead>
        <tbody>
            <?php
                require 'conn.php';
                $sql = "SELECT * FROM bloguse order by id desc";
                $result = mysqli_query($conn, $sql);
                while($row = mysqli_fetch_assoc($result)){
                    $file = explode('|', $row['image']);
                    $char_count = strlen($row['detail']);
                    $lines = ceil($char_count/37);
                    $lines = $lines>1?(--$lines):$lines;
                    $lines = preg_split('/\n/',$row['detail']);
                    $Total_lines = count($lines); 
                    echo $Total_lines;
                    
            ?>
            <tr>
                <th scope="row"><?= $row['id'] ?></th>
                <td><?= $row['date'] ?></td>
                <td><textarea readonly class="detail" name="" id="" cols="35" rows="<?= $lines ?>"><?= $row['detail'] ?></textarea>
                <!--<input value="<?= $row['detail'] ?>" type="textarea" class="detail">-->
                    <button class="downbutton">
                        <img src="css/Copy-Icon.png" class="copyicon">
                    </button>
                </td>
                <td><?php if($row['image']!=""){foreach($file as $f){ ?>
                    <a href="<?= 'file/'.$f ?>" class="downbutton" download>
                        <img class="downloadicon" src="css/down.png">
                    </a>
                    <?php }} ?>
                </td>
                <td><a href="alert.php?id=<?= $row['id'] ?>"><img src="css/delete.png" class="downloadicon"></a></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
<script>
    const btn = document.querySelectorAll('.copyicon');
    const detail = document.querySelectorAll('.detail');
    for(i=0; i < btn.length; i++){
        //let x = detail[i].innerText;
        let x = detail[i];
        let val = x.value; 
        let imag = btn[i];
        btn[i].addEventListener('click', function(event) {
            imag.src = 'css/right.png';
            setTimeout(() => {
                imag.src = 'css/Copy-Icon.png'
            }, 3000);
            x.select();
            document.execCommand("copy");//navigator.clipboard.writeText(val);
            window.getSelection().removeAllRanges();
            x.blur();
        });
    }
</script>

</html>

