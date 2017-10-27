$(document).ready(function () {
  $("#loginform").submit(function (e) {
    e.preventDefault();
    var url = 'assets/handlers/loginhandler.php';
    $.ajax({
      type: "POST",
      url: url,
      data: {'formdata': $('#loginform').serializeArray()},
      success: function (data) {
        if (data == 'true') {
          window.location.replace('index.php');
        } else {
          $('#errormessagelogin').html(data);
        }
      }
    });
  });

  $("#registerform").submit(function (e) {
    e.preventDefault();
    var url = 'assets/handlers/registerhandler.php';
    $.ajax({
      type: "POST",
      url: url,
      data: {'formdata': $('#registerform').serializeArray()},
      success: function (data) {
        if (data == 'true') {
          console.log(data);
          window.location.replace('login.php');
        } else {
          $('#errormessageregister').html(data);
        }
      }
    });
  });
});
