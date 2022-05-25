$(document).ready(function() {

    $("#login").click(function (e) {

        e.preventDefault();

        let email = $("#login_box input[name='email']").val();
        let psw = $("#login_box input[name='password']").val();

        $.ajax({

            url: "server/obiecte/accounts.obj.php",
            method: "POST",
            data: {action: "login", email: email, psw: psw},
            success: function (data) {

                alert(data);

            }

        })

    });

    $("#register").click(function (e) {

        e.preventDefault();

        let rol = $("#register_box select").val();
        let email = $("#register_box input[name='email']").val();
        let psw = $("#register_box input[name='password']").val();
        let re_psw = $("#register_box input[name='repassword']").val();

        $.ajax({

            url: "server/obiecte/accounts.obj.php",
            method: "POST",
            data: {action: "register", rol: rol, email: email, psw: psw, re_psw: re_psw},
            success: function (data) {

                alert(data);

            }

        })

    });
    
});