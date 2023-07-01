$('#showspinner').css('display','none');
$("#upload").on("submit", function (e) {
    e.preventDefault();
    $.ajax({
        type:'POST',
        url:'upload.php',
        data: new FormData(this),
        cache:false,
        contentType: false,
        processData: false,
        beforeSend: function(){
            $('#showspinner').css('display','block');
        },
        success:function(data){
            $('#showspinner').css('display','none');
            $('#content').html(data);
        },error:function(error){
            $('#content').html(error);
        }
    });
});
$("#fileid").on("change", function (e) {
    e.preventDefault();
    const data = new FormData($('#upload')[0]);
    //data.append("file", e.target.files);
    console.log(data);
    $.ajax({
        type:'POST',
        url:'upload.php',
        data: data,
        cache:false,
        contentType: false,
        processData: false,
        beforeSend: function(){
            $('#showspinner').css('display','block');
        },
        success:function(data){
            $('#showspinner').css('display','none');
            $('#content').html(data);
        },error:function(error){
            $('#content').html(error);
        }
    });
});