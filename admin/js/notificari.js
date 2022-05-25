$(document).ready(function() {

    $(".row .blue_btn").click(function () {

        $(this).parents(".row").siblings(".row").children(".text").slideUp();
        $(this).parents(".row").children(".text").slideToggle("fast");

        $(this).toggleClass("opened");

    });

});