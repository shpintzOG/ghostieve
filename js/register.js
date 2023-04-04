
$(document).ready(function() {

    $("register").click(function () {

        fname = $("#fname").val();
        lname = $("#lname").val();
        email = $("#email").val();
        password = $("#password").val();


        $.ajax({
            type: 'POST',
            url: "adduser.php",
            data: `fname=${fname}&lname=${lname}&email=${email}&password=${password}`,
            success: function (html) {

                if(html == 'true'){

                    $("#add_err2").html(`
                        <div class="alert alert-success">
                            <strong> Account </strong> procesed
                        </div>
                    `)

                    window.location.href = "index.php"

                } else if(html == 'false') {
                    $("#add_err2").html(`
                        <div class="alret alert-danger">
                            <strong>Email address</strong> alredy in system
                        </div>
                    `)
                } else if(html == 'fname') {
                    $("#add_err2").html(`
                        <div class="alret alert-danger">
                            <strong>first name</strong> alredy in system
                        </div>
                    `)
                } else if(html == 'lname') {
                    $("#add_err2").html(`
                        <div class="alret alert-danger">
                            <strong>last name</strong> alredy in system
                        </div>
                    `)
                    
                } else if(html == 'exist1') {
                    $("#add_err2").html(`
                        <div class="alret alert-danger">
                            <strong>email</strong> alredy in system
                        </div>
                    `)
                    
                } else if(html == 'exist2') {
                    $("#add_err2").html(`
                        <div class="alret alert-danger">
                            <strong>password</strong> alredy in system
                        </div>
                    `)
                    
                } else {
                    $('#add_err2').html(`
                        <div class="alert alert-danger">
                            <strong>Error</strong> proccessing request
                        </div>
                    `)
                }
                    
            },
            beforeSend: function () {
                $("#add_err2").html("loading....")
            }
        })


    })    


})