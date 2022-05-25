$(document).ready(function() {

    $(".check").click(function() {

        $(this).toggleClass("checked");

    });

    $("#share_list .header span").click(function() {

        $("#share_list").css("display", "none");

    });

    $("nav h3").click (function() {

        let href = $(this).attr("href");

        open(href, "_self");

    });

    $("img[src='img/icons/share.png']").click (function() {

        let idee = $(this).attr("data-investitor");
        
        $("#share_list").attr("data-idee", idee);
        $("#share_list").css("display", "flex");

    });


    $("#trimite-idee").click (function() {

        let investitori = "";
        let idee = $("#share_list").attr("data-idee");

        for (let i = 0; i < $("#share_list .checked").length; i++) {

            investitori += $($("#share_list .checked")[i]).attr("data-investitor") + ",";

        }

        if ( investitori == "" || idee == "" ) return alert("Selecteaza cel putin un investitor");

        $.ajax({

            url: "server/obiecte/idei.obj.php",
            method: "POST",
            data: {investitori: investitori, idee: idee},
            success: function (data) {

                console.log(data);

            }

        })

    });

});