$("#insert").on("submit", function (e) {
    e.preventDefault();
    obj = {
        url: 'table.php',
        type: "POST",
        cache:false,
        contentType: false,
        processData: false,
        data: new FormData(this),
        success: function (data) {
            $('#targetlayer').html(data);
        },
        error: function (data) {
            console.log("error");
            console.log(data);
        },
    };
    $.ajax(obj);
});

$("#export").on("submit", function (e) {
    e.preventDefault();
    obj = {
        url: 'exportfile.php',
        type: "POST",
        cache:false,
        contentType: false,
        processData: false,
        data: new FormData(this),
        success: function (data) {
            $('#targetlayer').html(data);
        },
        error: function (data) {
            console.log("error");
            console.log(data);
        },
    };
    $.ajax(obj);
});
