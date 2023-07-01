$(document).ready(function () {
    $("form").submit(function (event) {
      var formData = {
        name: $("#name").val(),
        email: $("#email").val(),
        superheroAlias: $("#superheroAlias").val(),
      };
  
      $.ajax({
        type: "POST",
        url: "a5.php",
        data: formData,
        encode: true,
      }).done(function (data) {
        console.log(data);
      });
  
      event.preventDefault();
    });
  });