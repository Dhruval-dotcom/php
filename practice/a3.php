
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script></head>
<body>
    <form action="post">
        <input name="inp" id="inp" type="text">
        <br>
        <input type="submit" id="button" value="sub" name="submit">
    </form>
    <div id="demo"></div>
</body>
<script>
      $(function () {

        $('form').on('submit', function (e) {

          e.preventDefault();
          var formdata = 'inp=' + document.getElementById("inp").value;
          $.ajax({
            type: 'post',
            url: 'a5.php',
            data: formdata,
            success: function (response) {
                $('#demo').html(response);
            }
          });

        });

      });
    </script>
</html>

