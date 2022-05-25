$(document).ready(function() {

    $("#salveza").click(function () {

        let email = $(this).siblings("input[name='email']").val();
        let psw = $(this).siblings("input[name='psw']").val();
        let re_psw = $(this).siblings("input[name='repsw']").val();

        const emailRe = /^(([^<>()\[\]\.,;:\s@\"]+(\.[^<>()\[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;
        const pswRe = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/;

        if ( email != "" && !email.match(emailRe) ) return alert ("Introduce-ti o adresa de email valida");

        if ( psw != "" && !psw.match(pswRe) ) return alert ("Parola trebuie sa contina minim 8 caractere si macar o cifra");

        if ( psw != re_psw ) return alert ("Parolele trebuie sa fie identice")

        $.ajax({

            url: "server/obiecte/accounts.obj.php",
            method: "POST",
            data: { action: "change", email: email, psw: psw },
            success: function (data) {

                console.log(data);

            }

        })

    });

});