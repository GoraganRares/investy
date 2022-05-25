<?php require_once "design/dependecies.php"; ?>
<title>Investy - Coming soon</title>
<style>

  .input {

    width: 100%;
    border: 3px solid #0080FF;
    border-radius: 34px;
    padding-left: 20px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    overflow: hidden;

  }

  .input input {

    width: 70%;
    padding: 20px;
    background: transparent;
    color: #00234A;
    font-size: 20px;
  }

  #newsletter {

    width: 30%;
    padding: 20px;
    background-color: #0080FF;
    border-top-left-radius: 34px;
    border-bottom-left-radius: 34px;
    color: #fff;
    text-align: center;
    border: 3px solid #0080FF;
    cursor: pointer;

  }

  @media (max-width: 700px) {

    .input {

      padding-left: 5px;

    }

    .input input, #newsletter {

      padding: 10px;
      font-size: 16px;

    }
  }

</style>
<body class="home">
<section class="countdown-container relative header-element column flex1 fullscreen padding-all">
    <img class='logo margin20' src="./static/content/icons/logo.svg" alt="logo">
    <h4 class='sub-title margin30 text-center'>Platforma <span class="blue-color"> online</span> unde <br/> <span class="blue-color"> poți obține finanțare pentru afacerea</span> ta</h4>
    <div id="demo" class='countdown margin20 row width100'></div>
    <h2 class="title margin20">Coming soon</h2>
    <h4 class='sub-title margin30 text-center'>Îți poți introduce <span class="blue-color"> adresa de email</span> mai jos pentru a primi <span class="blue-color"> noutăți</span> despre platformă</h4>

    <?php
    
    if ( !isset($_COOKIE['newsletter']) ) {
    
    ?>
    <div class="input"> 
      <input type="text" name="email" placeholder="Adresa ta de mail">
      <div id="newsletter">Trimite</div>
    </div>
    <?php } ?>
    <img class='buble' src="./static/content/buble.svg" alt="buble">
    <img class='buble-2' src="./static/content/buble.svg" alt="buble">
    
</section>
<script>
// Set the date we're counting down to
var countDownDate = new Date("May 26, 2022 15:37:25").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();
    
  // Find the distance between now and the count down date
  var distance = countDownDate - now;
    
  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
  // Output the result in an element with id="demo"
  document.getElementById("demo").innerHTML = 
    `<p class="column">${days}
        <span class='blue-color'>Zile</span>
    </p>
    <p class="column">${hours}
        <span class='blue-color'>Ore</span>
    </p>
    <p class="column">${minutes}
        <span class='blue-color'>Minute</span>
    </p>
    <p class="column">${seconds}
        <span class='blue-color'>Secunde</span>
    </p>
    
    `;
// "<div class='row'" + "<div class='column flex1'>" + days + 'd ' + '<div>' + "<div class='column flex1'>" + hours + "h " + '</div>' + "<div class='column flex1'>" + minutes + "m " + '</div>' + "<div class='column flex1'>" + seconds + "s " + '</div>' + '</div>';
// document.getElementById("demo").innerHTML ="<div class='row'" + days + "d " + hours + "h "+ minutes + "m " + seconds + "s " + "</div>";
  // If the count down is over, write some text 
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "Soon!";
  }
}, 1000);

$("#newsletter").click(function(){

  let email = $(this).siblings("input[name='email']");

  const emailRe = /^(([^<>()\[\]\.,;:\s@\"]+(\.[^<>()\[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;

  if ( !email.val().match(emailRe) ) return alert("Introduce-ti o adresa de email corecta");

  $.ajax({

      url: "server/newsletter.php",
      method: "POST",
      data: { email: email.val()},
      success: function(data){

          if ( data == "Te-ai abonat cu success la newsletter" || data == "Esti deja abonat la newsletter" ) $(".input").remove();

          // SUCCESS
          alert(data);
          email.val("");


      }

  })

});

</script>

</body>
</html>
