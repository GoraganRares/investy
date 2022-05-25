$(document).ready(function(){

  var hamburger = document.getElementsByClassName("hamburger");
    for (var i = 0; i < hamburger.length; i++) {
        hamburger[i].addEventListener('click', function() {
        this.classList.toggle("is-active");
        }, false);
      }
  (function() {
  var requestAnimationFrame = window.requestAnimationFrame || window.mozRequestAnimationFrame ||
                              window.webkitRequestAnimationFrame || window.msRequestAnimationFrame;
  window.requestAnimationFrame = requestAnimationFrame;
  })();

  $('.hamburger').on('click', () => {
      $('.nav-list .nav.phone').slideToggle();
      $('.nav-list .nav.phone').addClass("show-nav");
  });
  $('.hamburger').click(function(){
      $('nav').toggleClass("background");
  });

  $(".togglePassword").click(function(){
    $(this).toggleClass('fa-eye-slash');
    const input = $(".idpassword");
    // $(".idpassword").attr('type', "text");
      if (input.attr("type") === "password") {
        input.attr("type", "text");
      } else {
        input.attr("type", "password");
      }
  })
  
  var prevScrollpos2 = window.pageYOffset;
  window.onscroll = function() {
  var currentScrollPos2 = window.pageYOffset;
    if (prevScrollpos2 > currentScrollPos2) {
      document.getElementById("navbar-scroll-transparent").style.top = "0px";

      document.getElementById("navbar-scroll-transparent").style.boxShadow = "0px 10px 25px #00000029";
      document.getElementById("navbar-scroll-transparent").style.backgroundColor = '#fff';
      document.getElementById("navbar-scroll-transparent").style.transform= "translateY(0)";
      document.getElementById("navbar-scroll-transparent").style.transition= "all 0.3s ease-in-out";
      document.getElementById("navbar-scroll-transparent").classList.add("scroll");

    }
    else {
      document.getElementById("navbar-scroll-transparent").style.top = "0px";
      document.getElementById("navbar-scroll-transparent").classList.add("scroll");
      document.getElementById("navbar-scroll-transparent").style.boxShadow = "0px 10px 25px #00000029";
      document.getElementById("navbar-scroll-transparent").style.backgroundColor = '#fff';


    }
    prevScrollpos2 = currentScrollPos2;
    if (currentScrollPos2 === 0) {
      if ( window != -1 ) {

        document.getElementById("navbar-scroll-transparent").classList.remove("scroll");
        document.getElementById("navbar-scroll-transparent").style.boxShadow = "0px 10px 25px transparent";
        document.getElementById("navbar-scroll-transparent").style.backgroundColor = 'transparent';



      }
      else {
        document.getElementById("navbar-scroll-transparent").style.backgroundColor = '#fff';
        document.getElementById("navbar-scroll-transparent").style.boxShadow = "0px 10px 25px transparent";

      }
    } 
  }

});