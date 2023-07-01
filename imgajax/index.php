<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>

<body>
    <form>
        <input type="file" name="file[]" multiple><br><br>
        <input type="submit" name="submit">
    </form>
        <div id="targetLayer"></div>

    <script>
        $(document).ready(function (e) {
            $("form").on('submit',(function(e) {
                e.preventDefault();
                $.ajax({
                    url: "upload.php",
                    type: "POST",
                    data:  new FormData(this),
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function(data)
                    {
                        $("#targetLayer").html(data);
                    },
                    error: function(data)
                    {
                        console.log("error");
                        console.log(data);
                    }
                });
            }));
        });
    </script>
</body>

</html>