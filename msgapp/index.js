$("#submit").click(() => {
  console.log("Hello");
  $.ajax({
    url: "send.php",
    method: "post",
    data: {
      msg: $("#msg").val(),
    },
    success: function (data) {
      $("#msg").val("");
      console.log(data);
    },
  });
});
setInterval(function () {
  $("#target").load("table.php");
}, 1000);
