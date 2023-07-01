<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="a1">a1</label><input type="checkbox" value="a1" name="a[]" id="a1">
        <label for="a2">a2</label><input type="checkbox" name="a[]" id="a2">
        <label for="a3">a3</label><input type="checkbox" name="a[]" id="a3">
        <label for="a4">a4</label><input type="checkbox" name="a[]" id="a4">
        <label for="a5">a5</label><input type="checkbox" name="a[]" id="a5">
        <br><br><br>
        <input type="radio" name="b[]" id="">
        <input type="radio" name="b[]" id="">
        <br><br><br>
        select
        <select name="x[]" multiple id="">
            <option label="a" value="aaa"></option>
            <option label="b" value="aaa1"></option>
            <option label="c" value="aaa2"></option>
            <option label="d" value="aaa3"></option>
        </select>
        <br><br><br>
        <input type="submit" name="submit">
    </form>
    
</body>
</html>
<?php

 if(isset($_POST['submit'])){
    print_r($_POST['a']);
    print_r($_POST['b']);
    print_r($_POST['x']);
 }
