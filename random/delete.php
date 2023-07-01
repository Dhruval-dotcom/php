<?php
     require "conn.php";
        $id=intval($_GET['id']);

        $sql="SELECT * FROM bloguse WHERE id={$id}";
        $r=mysqli_query($conn,$sql);
        $row=mysqli_fetch_array($r);
        $name=$row['img'];
        unlink('image/'.$name);

        $sql2="DELETE FROM bloguse WHERE id={$id} ";
        if(mysqli_query($conn,$sql2)){
            header("location: table.php");
        }
        mysqli_close($conn);
    
?>