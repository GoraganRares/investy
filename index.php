<?php require_once "design/dependecies.php"; ?>
<title>Investy - Home</title>
<body class="home">
<?php require_once "design/nav.php"; ?>
<header id="header" class="header padding-all flex column section-block">
    <div class="left-container flex1 column-left">
        <h1 class="title margin20">De acum banii <br/> <span class="blue-color"> nu mai sunt</span> o problemă</h1>
        <p class="description max-width500 margin20">Poți obține finanțare de la investitori privați fără riscuri, pentru orice idee de afacere sau
start-up, indiferent de experiența ta în business.</p>
        <button class="blue-btn dark margin20">Povești de succes</button>
        <div class="row-left margin10">
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
        </div>
        <p class="description fw600 margin10">Peste 50 de povești de succes</p>
        <p class="description fw600">Peste 150 de investitori pregătiți</p>
    </div>
    <div class="right-container flex1">
        <img class="cutie" src="./static/content/header-img.webp" alt="header-img"/>
    </div>
</header>

<section class="statistics padding-all not-fullscreen">
    <div class="row margin60">
        <div class="column">
            <span class="numbers fw600">75<span class="orange-color numbers">+</span></span>
            <span>Antreprenori finanțați</span>
        </div>
        <div class="column">
            <span class="numbers fw600">1mil€<span>+</span></span>
            <span>Atrași în investiții pentru firme</span>
        </div>
        <div class="column">
            <span class="numbers fw600">150<span>+</span></span>
            <span>Investitori pregătiți</span>
        </div>
        <div class="column">
            <span class="numbers fw600">200<span>€</span></span>
            <span>Firme partenere Investy</span>
        </div>
    </div>
    <div class="line"></div>
</section>

<section class="padding-all row-left not-fullscreen">
    <div class="left-container flex1 column-left">
        <div class="box-subtitle width100 margin30 row-left show">
            <div class="line"></div>
            <h2 class="sub-title">Despre noi</h2>
        </div>
        <h3 class="title margin30 max-width700">Ajutăm antreprenorii <span class="blue-color"> să obțină finanțare </span>de la investitori privați</h3>
        <p class="description margin30">Crezi că ai nevoie de o idee strălucită sau inovativă pentru a obține finanțare? Nici pe
departe!
95% din ideile strălucite sau inovative reprezintă un risc mare de pierdere a banilor.
Investitorii preferă să-și blocheze banii în idei de afaceri care există de ceva timp pe piața
din România și care s-au dovedit a fi foarte eficiente și profitabile de-a lungul timpului.
Aici până și cea mai mică idee de afacere poate deveni realitate, chiar dacă nu ai experiență
în business și ești la început de drum.
</p>
        <a href="cum-functioneaza.php" class="blue-btn">Cum funcționează</a>
    </div>
    <div class="right-container">
        <img src="./static/content/despre-home.webp" alt="despre"/>
    </div>
</section>

<section class="padding-all row-left row-reverse not-fullscreen">
    <div class="left-container flex1 column-left">
        <div class="box-subtitle width100 margin30 row-left show">
            <div class="line"></div>
            <h2 class="sub-title">Povești de succes</h2>
        </div>
        <h3 class="title margin30 ">Cel mai <span class="blue-color">cunoscut</span> salon din orașul Constanța</h3>
        <p class="description margin30">A obținut finanțare de la unul dintre investitorii privați ai platformei noastre.</p>
        <div class="row-left margin20">
            <img class="icons" src="./static/content/icons/check-icon.svg" alt="check-icon">
            <span class="description fw600">Amortizarea investiției</span>
        </div>
        <div class="row-left margin20">
            <img class="icons" src="./static/content/icons/dolars.svg" alt="dolars-icon">
            <span class="description fw600">Profitabilitate în primul an</span>
        </div>
        <div class="row-left margin20">
            <img class="icons" src="./static/content/icons/fire.svg" alt="fire-icon">
            <span class="description fw600">Relație sănătoasă cu investitorul</span>
        </div>
        <a href="povesti-de-succes.php" class="blue-btn">Vezi mai multe povești de succes</a>
    </div>
    <div class="right-container">
        <img src="./static/content/povesti-home.webp" alt="povesti de succes"/>
    </div>
</section>

<section class="padding-all not-fullscreen">
    <div class="footer-slogan not-fullscreen flex row">
        <div class="left-container flex column-left">
            <h4 class="title max-width700 white-color">Hai să îți finanțăm <br/> afacerea mult visată</h4>
            <button class="blue-btn light" >Depune ideea aici</button>
        </div>
        <div class="right-container">
            <img class="img-footer" src="./static/content/cta-guy.webp" alt="Call to action guy"/>
            <span class="text-desc">A obținut 60.000€ pentru afacerea lui</span>
        </div>
    </div>
</section>

<!-- <section class="blog-container padding-all not-fullscreen">
    <div class="box-subtitle width100 margin30 row-left show">
        <div class="line"></div>
        <h2 class="sub-title">Noutăți</h2>
    </div>
    <div class="owl-carousel owl-blog owl-theme">
        <div class="blog-box-all">
            <img src="./static/content/blog-2.webp" alt="blog2">
            <div class="blog-box column-left">
                <span class="black-color description margin10">6 Ianuarie 2022</span>
                <h2 class="sub-title white-color margin10">Noi investitori atrași în proiect</h2>
                <p class="description white-color margin10">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus felis nunc, gravida eu sagittis eget, porttitor vel odio. Sed porttitor felis et massa</p>
                <a class="white-color underline" href="">citește mai mult</a>
            </div>
        </div>
        <div class="blog-box-all">
            <img src="./static/content/blog-1.webp" alt="blog2">
            <div class="blog-box column-left">
                <span class="black-color description margin10">6 Ianuarie 2022</span>
                <h2 class="sub-title white-color margin10">Noi investitori atrași în proiect</h2>
                <p class="description white-color margin10">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus felis nunc, gravida eu sagittis eget, porttitor vel odio. Sed porttitor felis et massa</p>
                <a class="white-color underline" href="">citește mai mult</a>
            </div>
        </div>
        <div class="blog-box-all">
            <img src="./static/content/blog-4.webp" alt="blog2">
            <div class="blog-box column-left">
                <span class="black-color description margin10">6 Ianuarie 2022</span>
                <h2 class="sub-title white-color margin10">Noi investitori atrași în proiect</h2>
                <p class="description white-color margin10">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus felis nunc, gravida eu sagittis eget, porttitor vel odio. Sed porttitor felis et massa</p>
                <a class="white-color underline" href="">citește mai mult</a>
            </div>
        </div>
        <div class="blog-box-all">
            <img src="./static/content/blog-3.webp" alt="blog2">
            <div class="blog-box column-left">
                <span class="black-color description margin10">6 Ianuarie 2022</span>
                <h2 class="sub-title white-color margin10">Noi investitori atrași în proiect</h2>
                <p class="description white-color margin10">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus felis nunc, gravida eu sagittis eget, porttitor vel odio. Sed porttitor felis et massa</p>
                <a class="white-color underline" href="">citește mai mult</a>
            </div>
        </div>
    </div>
</section> -->
<?php require_once "design/footer.php"; ?>
<script>
$(".owl-carousel").owlCarousel({
    loop:false,
    margin:60,
    nav:false,
    dots: false,
    responsiveClass:true,
    responsive:{
        0:{
            items: 1,
            stagePadding: 50,
        },
        800:{
            items: 2,
            stagePadding: 100,
        },
        1300:{
            items: 3,
            stagePadding: 100,
        },
        1600:{
            items: 3,
            stagePadding: 100,
        }

    }
})
</script>
</body>
</html>
