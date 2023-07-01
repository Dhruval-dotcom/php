var arr = [];
$('.btn').click(function(){
    $(this).html('Added to cart')
    arr.push($(this).data('id'));
    $(this).css('background-color','orange');
});
window.onbeforeunload = function(event) {
    $.ajax({
        type:'post',
        url:'insert.php',
        data: {
            ids:arr
        },
        success: function(data){
            console.log(data);
        },error: function (data) {
            console.log("error");
            console.log(data);
        }
    });
};