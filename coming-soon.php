<?php require_once "design/dependecies.php"; ?>
<title>Investy - Coming soon</title>
<body class="home">
<section class="countdown-container relative header-element column flex1 fullscreen padding-all">
    <img class='logo margin20' src="./static/content/icons/logo.svg" alt="logo">
    <h4 class='sub-title margin30 text-center'>Platforma <span class="blue-color"> online</span> unde <br/> <span class="blue-color"> poți obține finanțare pentru afacerea</span> ta</h4>
    <div id="demo" class='countdown margin20 row width100'></div>
    <h2 class="title margin20">Coming soon</h2>
    <h4 class='sub-title margin30 text-center'>Îți poți introduce <span class="blue-color"> adresa de email</span> mai jos pentru a primi <span class="blue-color"> noutăți</span> despre platformă</h4>
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
</script>

</body>
</html>
