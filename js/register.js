$(document).ready(function () {
  $("#register").click(function (e) {
    e.preventDefault();

    fname = $("#fname").val();
    lname = $("#lname").val();
    email = $("#email").val();
    password = $("#password").val();

    $.ajax({
      type: "POST",
      url: "addUser.php",
      data: `fname=${fname}&lname=${lname}&email=${email}&password=${password}`,
      success: function (html) {
        console.log(html)
        if (html == "true") {
          $("#add_err").html(`
                        <div class="alert alert-success">
                            <strong> Account </strong> procesed
                        </div>
                    `);

          window.location.href = "index.php";
        } else if (html == "false") {
          $("#add_err").html(`
                        <div class="alert alert-danger">
                            <strong>Email address</strong> alredy in system
                        </div>
                    `);
        } else if (html == "fname") {
          $("#add_err").html(`
                        <div class="alret alert-danger">
                            <strong>first name</strong> alredy in system
                        </div>
                    `);
        } else if (html == "lname") {
          $("#add_err").html(`
                        <div class="alert alert-danger">
                            <strong>last name</strong> alredy in system
                        </div>
                    `);
        } else if (html == "emailog") {
          $("#add_err").html(`
                        <div class="alert alert-danger">
                            <strong>email</strong> alredy in system
                        </div>
                    `);
        } else if (html == "passwordog") {
          $("#add_err").html(`
                        <div class="alert alert-danger">
                            <strong>password</strong> alredy in system
                        </div>
                    `);
        } else {
          $("#add_err").html(`
                        <div class="alert alert-danger">
                            <strong>Error</strong> proccessing request
                        </div>
                    `);
        }
      },
      beforeSend: function () {
        $("#add_err").html("loading....");
      },
    });
  });
});
