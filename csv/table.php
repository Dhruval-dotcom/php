<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <section>
        <!--for demo wrap-->
        <h1>Fixed Table header</h1>
        <div class="tbl-header">
            <table cellpadding="0" cellspacing="0" border="0">
                <thead>
                    <tr>
                        <th>F_name</th>
                        <th>L_name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Inserted</th>
                    </tr>
                </thead>
            </table>
        </div>
        <div class="tbl-content">
            <table cellpadding="0" cellspacing="0" border="0">
                <tbody>
                    <?php
                        $conn = mysqli_connect('localhost:3306','admin','MyNewPass','dhruvaldb');
 
                        $filename = $_FILES['file']['tmp_name'];
                        $file = fopen($filename, "r");
                        $getData = fgetcsv($file, 10000, ",");
                        while (($getData = fgetcsv($file, 10000, ",")) !== FALSE){
                            // echo "<pre>";
                            // print_r($getData);
                            // echo "</pre>";
                            $sql = "INSERT INTO csv (fname,lname,email,phone) VALUES ('$getData[1]','$getData[2]','$getData[3]','$getData[4]')";
                            if(mysqli_query($conn,$sql)){
                                //echo $getData[0]." inserted succesfully <br>";
                            }
                        
                    ?>

                    <tr>
                        <td><?php echo $getData[1]; ?></td>
                        <td><?php echo $getData[2]; ?></td>
                        <td><?php echo $getData[3]; ?></td>
                        <td><?php echo $getData[4]; ?></td>
                        <td><?php echo "Yes" ?></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </section>


    <!-- follow me template -->
   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="index.js"></script>
</body>

</html>