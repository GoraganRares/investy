$(document).ready(function() {

    let register = false;

    $("#register").click(function (e) {

        if ( register == true ) return;

        e.preventDefault();

        let username = $(this).siblings("input[name='username']").val();
        let nume = $(this).siblings("input[name='name']").val();
        let email = $(this).siblings("input[name='email']").val();
        let psw = $(this).parent().find("input[name='password']").val();
        let re_psw = $(this).parent().find("input[name='repassword']").val();
        
        register = true;

        $.ajax({

            url: "admin/server/obiecte/accounts.obj.php",
            method: "POST",
            data: {action: "register_client", username: username, email: email, nume: nume, psw: psw, re_psw: re_psw},
            success: function(data) {

                register = false;
                alert(data);

            }

        })

    });

    let login = false;

    $("#login").click(function (e) {

        if ( login == true ) return;

        e.preventDefault();

        let email = $(this).siblings("input[name='email']").val();
        let psw = $(this).parent().find("input[name='password']").val();

        login = true;

        $.ajax({

            url: "admin/server/obiecte/accounts.obj.php",
            method: "POST",
            data: {action: "login", email: email, psw: psw},
            success: function(data) {

                if ( data == "Te-ai autentificat cu success" ) window.open("cont.php", "_self");

                login = false;
                alert(data);

            }

        })

    });

    $("#update_profile").click(function () {

        let oras = $(this).parent().find("#oras").val();
        let judet = $(this).parent().find("#judete").val();
        let adresa = $(this).parent().find("textarea[name='adresa']").val();
        let limbi = "";
        let hoby = "";

        for (let i = 0; i < $(".limba-container").length; i++) {
            
            let lang_elem = $($(".limba-container")[i]).children("select[name='languages']")[0];
            let niv_elem = $($(".limba-container")[i]).children("select[name='nivel']")[0];

            if ( lang_elem.options[lang_elem.selectedIndex].text == "Limba" ) continue;

            if ( i == $(".limba-container").length - 1 ) {

                limbi += lang_elem.options[lang_elem.selectedIndex].text + "," + niv_elem.options[niv_elem.selectedIndex].text;
                
            }else {

                limbi += lang_elem.options[lang_elem.selectedIndex].text + "," + niv_elem.options[niv_elem.selectedIndex].text + ";";

            }
            

        }

        for ( let i = 0; i < $(".hobby-list > div").length; i++) {

            if ( i == $(".hobby-list > div").length - 1 ) {
                hoby += $(".hobby-list > div")[i].innerText;
            }else {

                hoby += $(".hobby-list > div")[i].innerText + ";";

            }

        }

        let studii = $("#result-institutie").text() + ";" + $("#result-calificare").text() + ";" + $("#result-localitate-tara").text() + ";" + $("#result-date-inceput-sfarsit").text();
        let experienta = $("#result-post-ocupat").text() + ";" + $("#result-firma-lucrat").text() + ";" + $("#result-localitate-tara-experienta").text() + ";" + $("#result-date-inceput-sfarsit-experienta").text();

        $.ajax({
            url: "admin/server/obiecte/accounts.obj.php",
            method: "POST",
            data: {action: "updete_profile", oras: oras, judet: judet, adresa: adresa, limbi: limbi, hoby: hoby, studii: studii, experienta: experienta},
            success: function(data) {

                console.log(data);

            }
        })

    });

});
