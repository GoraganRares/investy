<?php require_once "design/dependecies.php"; ?>
<title>Investy - Povești de succes</title>
<body class="povesti">
<?php require_once "design/nav.php"; ?>

<section class="povesti-container header-element padding-all ">
    <div id="owl-povesti" class="owl-carousel owl-povesti-big owl-theme">
        <div class="box-povesti row">
            <img class="povesti-img" src="./static/content/alexo-povesti.webp" alt="alexo-povesti-de-succes">
            <div class="column-left">
                <h2 class="title margin40">Restaurant Alexo <br/> Investiție de <span class="blue-color">60.000€</span></h2>
                <a href="investitie.php" class="blue-btn row-left">vezi povestea aici <img class="icons" src="./static/content/paper-plane.webp" alt="send"></a>
            </div>
        </div>
        <div class="box-povesti row">
            <img class="povesti-img" src="./static/content/barbrerzz-povesti.webp" alt="alexo-povesti-de-succes">
            <div class="column-left">
                <h2 class="title margin40">Restaurant Alexo <br/> Investiție de <span class="blue-color">60.000€</span></h2>
                <a href="#" class="blue-btn row-left">vezi povestea aici <img class="icons" src="./static/content/paper-plane.webp" alt="send"></a>
            </div>
        </div>
        <div class="box-povesti row">
            <img class="povesti-img" src="./static/content/barbrerzz-povesti.webp" alt="alexo-povesti-de-succes">
            <div class="column-left">
                <h2 class="title margin40">Restaurant Alexo <br/> Investiție de <span class="blue-color">60.000€</span></h2>
                <a href="#" class="blue-btn row-left">vezi povestea aici <img class="icons" src="./static/content/paper-plane.webp" alt="send"></a>
            </div>
        </div>
        <div class="box-povesti row">
            <img class="povesti-img" src="./static/content/barbrerzz-povesti.webp" alt="alexo-povesti-de-succes">
            <div class="column-left">
                <h2 class="title margin40">Restaurant Alexo <br/> Investiție de <span class="blue-color">60.000€</span></h2>
                <a href="#" class="blue-btn row-left">vezi povestea aici <img class="icons" src="./static/content/paper-plane.webp" alt="send"></a>
            </div>
        </div>
    </div>
    <div id="owl-povesti-phone" class="owl-carousel column owl-povesti-phone owl-theme">
        <div>
            <h2 class="title white-color margin40">Restaurant Alexo <br/> Investiție de <span class="blue-color">60.000€</span></h2>
            <a href="#" class="blue-btn row-left">vezi povestea aici <img class="icons" src="./static/content/paper-plane.webp" alt="send"></a>
        </div>
        <div>
            <h2 class="title white-color margin40">Restaurant Alexo <br/> Investiție de <span class="blue-color">60.000€</span></h2>
            <a href="#" class="blue-btn row-left">vezi povestea aici <img class="icons" src="./static/content/paper-plane.webp" alt="send"></a>
        </div>
    </div>
</section>
<script>
$(document).ready(function() {
var owl = $(".owl-carousel");

owl.owlCarousel({
    loop:false,
    margin:60,
    nav:true,
    dots: false,
    responsiveClass:true,
    responsive:{
        0:{
            items: 1,
        },
        800:{
            items: 1,
            stagePadding: 0,
        },
        1300:{
            items: 1,
            stagePadding: 100,
        },
        1600:{
            items: 1,
            stagePadding: 200,
        }

    }
})

$(".next").click(function(){
    owl.trigger('owl.next');
})
$(".prev").click(function(){
    owl.trigger('owl.prev');
}) 
});
</script>
<?php require_once "design/footer.php"; ?>
</body>
</html>
