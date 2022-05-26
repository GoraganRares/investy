<?php require_once "design/dependecies.php"; ?>
<title>Investy - Depunde Ideea</title>
<body class="home">
<?php require_once "design/nav.php"; ?>
<section class="depune not-fullscreen flex column header-element">
    <div class="first column width100">
        <h1 class="title margin40">Depune ideea de afacere</h1>
        <div class="box-bullet row row-up width100 margin60">
            <div class="bulet-container column">
                <div class='bulet on'>1
                    <div class="line-mid"></div>
                </div>
                <span>Caracteristici</span>
                <div class="line-oriz on"></div>
            </div>
            <div class="bulet-container column">
                
                <div class='bulet'>2
                    <div class="line-mid"></div>
                </div>
                <span>Descriere detaliată</span>
                <div class="line-oriz"></div>
            </div>
            <div class="bulet-container column">
                <div class='bulet'>3</div>
                <span>Finalizare</span>
                <div class="line-oriz"></div>
            </div>
        </div>
        <div class="column width100 margin30">
            <input id='ideea' type="text" name="email" placeholder="Care este ideea ta de afacere? ( max. 100 caractere )" class="login-input margin30" required/>
            <input id='suma' type="number" min='1'name="email" placeholder="Care este suma de care ai nevoie? ( în euro )" class="login-input margin30" required/>
            <textarea id='investiti' type="text" name="email" placeholder="În ce vor fi investiți banii? ( max. 300 caractere )" class="login-input margin30" required></textarea>
        </div>
        <div class="column-left margin30">
            <h4 class='sub-title'>În ce stadiu este afacerea ta?</h4>
            <label class="container"><span class="sub-title description input-span">Am doar ideea, urmează să încep afacerea</span>
                <input class='radio' class='am-ideea' type="radio" name="termeni">
                <span class="checkmark"></span>
            </label>
            <label class="container"><span class="sub-title description input-span">Am început afacerea și vreau să o dezvolt</span>
                <input class='radio' class='am-ideea' type="radio" name="termeni">
                <span class="checkmark"></span>
            </label>
        </div>
        <div class="error-1 with100"></div>
        <buton class="blue-btn continue-btn">Continuă</buton>
    </div>
    <div class="second step column width100">
    <h2 class="title margin40">Depunde ideea de afacere</h2>
        <div class="box-bullet row row-up width100 margin60">
            <div class="bulet-container column">
                <div style='display: flex; border: 0px' class='bulet on'><img src="./static/content/icons/check-icon.svg" alt="check">
                    <div class="line-mid"></div>
                </div>
                <span>Caracteristici</span>
                <div class="line-oriz"></div>
            </div>
            <div class="bulet-container column">
                <div class='bulet on'>2
                    <div class="line-mid"></div>
                </div>
                <span>Descriere detaliată</span>
                <div class="line-oriz on"></div>
            </div>
            <div class="bulet-container column">
                <div class='bulet'>3</div>
                <span>Finalizare</span>
                <div class="line-oriz"></div>
            </div>
        </div>
            <textarea id='cheie' type="text" name="email" placeholder="Care sunt activitățile cheie?" class="login-input margin30" required></textarea>
            <textarea id='parteneri' type="text" name="email" placeholder="Cine sunt partenerii afacerii?" class="login-input margin30" required></textarea>
            <textarea id='resurse' type="text" name="email" placeholder="Care sunt resursele necesare?" class="login-input margin30" required></textarea>
            <textarea id='vanzari' type="text" name="email" placeholder="Care sunt canalele de vânzare potrivite?" class="login-input margin30" required></textarea>
            <textarea id='structura' type="text" name="email" placeholder="Adaugă structura costurilor" class="login-input margin30" required></textarea>
            <textarea id='strucura-vanzarilor' type="text" name="email" placeholder="Adaugă structura vânzărilor" class="login-input margin30" required></textarea>
        <div class="error-2 with100"></div>
        <div class="row">
            <button class="blue-btn mr20 back-first dark">Înapoi</button>
            <buton class="blue-btn third-btn">Continuă</buton>
        </div>
    </div>
    <div class="third step column width100">
    <h2 class="title margin40">Depunde ideea de afacere</h2>
        <div class="box-bullet row row-up width100 margin60">
            <div class="bulet-container column">
                <div style='display: flex; border: 0px' class='bulet on'><img src="./static/content/icons/check-icon.svg" alt="check">
                    <div class="line-mid"></div>
                </div>
                <span>Caracteristici</span>
                <div class="line-oriz"></div>
            </div>
            <div class="bulet-container column">
                <div style='display: flex; border: 0px' class='bulet on'><img src="./static/content/icons/dolars.svg" alt="check">
                    <div class="line-mid"></div>
                </div>
                <span>Caracteristici</span>
                <div class="line-oriz"></div>
            </div>
            <div class="bulet-container column">
                <div class='bulet'>3</div>
                <span>Finalizare</span>
                <div class="line-oriz"></div>
            </div>
        </div>
        <div class="error-3 with100"></div>
        <div class="row">
            <div class="column-left">
                <h3 class="title margin20">Ieși în evidență în fața investitorilor!</h3>
                <p class="sub-title margin10">Ideile promovate <span class='blue-color'>cresc șansele</span> de a atrage o investiție cu 80%</p>
                <p class="sub-title margin20">Prețul pachetului: 250 lei</p>
                <buton class="blue-btn buy-promo light-two margin30">Aleg pachetul de promovare</buton>
                <h4 class="description four-btn blue-color underline margin10">Nu doresc evidențierea ideii</h4>
            </div>
        </div>
    </div>
    <div class="four step column width100">
    <h2 class="title margin40">Depunde ideea de afacere</h2>
        <div class="box-bullet row row-up width100 margin60">
            <div class="bulet-container column">
                <div style='display: flex; border: 0px' class='bulet on'><img src="./static/content/icons/check-icon.svg" alt="check">
                    <div class="line-mid"></div>
                </div>
                <span>Caracteristici</span>
                <div class="line-oriz"></div>
            </div>
            <div class="bulet-container column">
                <div style='display: flex; border: 0px' class='bulet on'><img src="./static/content/icons/dolars.svg" alt="check">
                    <div class="line-mid"></div>
                </div>
                <span>Caracteristici</span>
                <div class="line-oriz"></div>
            </div>
            <div class="bulet-container column">
                <div class='bulet'>3</div>
                <span>Finalizare</span>
                <div class="line-oriz"></div>
            </div>
        </div>
        <div class="column">
            <h2 class="title margin30">Felicitări, proiectul tău <span class="blue-color">a fost depus cu succes</span></h2>
            <h3 class="sub-title margin50">Te vom anunța cu privire la răspunsul investitorilor</h3>
        </div>
        <div class="box-nav width100 row">
            <a href='depune-ideea.php' class="nav-link not big-text mr20 row blue-btn">Depune ideea aici <img src="static/content/icons/edit.svg" alt="Depunde ideea"></a>
            <a href='cont-completat.php' class="blue-btn big-text continue-third dark">Contul meu</a>
        </div>
    </div>
</section>

<div class="popup payment section">
    <div class="popup-box relative column-left">
        <div class="relative close-box width100 row">
            <p class="sub-title">Total de plată: 250 de lei</p>
            <img class='close close-btn pointer' src='./static/content/icons/x.svg' alt='remove-icon' class='icons'>
        </div>
        <div class="column-left">
            <h3 class="sub-title margin10">Numele posesorului</h3>
            <input id='nume-posesor' type="text" name="card-number" class="login-input margin30" required/>
            <h3 class="sub-title margin10">Numărul cardului</h3>
            <input id='card-number' type="number" min='1'name="email" class="login-input margin30" required/>
            <div class="row width100">
                <div class="column-left mr20">
                    <h3 class="sub-title margin10">Data de expirare</h3>
                    <input id='data-expirare' type="number" min='1'name="email" placeholder="(12/25)" class="login-input margin30" required/>
                </div>
                <div class="column-left">
                    <h3 class="sub-title margin10">CVV</h3>
                    <input id='cvv' type="number" min='1'name="email"  class="login-input margin30" required/>
                </div>
            </div>
        </div>
        <button class="save payment-check close-btn blue-btn">Plătește</button>
    </div>
</div>

<div class="popup payment-failed section">
    <div class="popup-box relative column-left">
        <div style='justify-content: flex-end; width: 100%' class="relative close-box width100 row">
            <img class='close close-btn pointer' src='./static/content/icons/x.svg' alt='remove-icon' class='icons'>
        </div>
        <div class="column">
            <p class="description">Am întâmpinat o problemă în realizarea plății <br/> Te rugăm să verifici soldul și detaliile cardului și să încerci din nou</p>
        </div>
        <button class="save close-btn blue-btn">Încearcă din nou</button>
    </div>
</div>

<?php require_once "design/footer.php"; ?>

<script>
$(document).ready(function(){

$('.continue-btn').click(function() {
    // if ($('#judete').val() == 0 && $('#oras').val() == 0 && $('#adresa').val().length === 0) {input-hobby
    if ($('.am-ideea').is(':checked') || $('#suma').val() == 0 || $('#idee').val() == 0 || $('#investiti').val() == 0) {
        $('.error-1').append("<p class='sub-title margin30 color-red'>Toate câmpurile sunt obligatorii</p>");
    } else {
        $(".first").hide();
        $(".second").css('display', 'flex');
    }
})

$('.third-btn').click(function() {
    // if ($('#judete').val() == 0 && $('#oras').val() == 0 && $('#adresa').val().length === 0) {input-hobby
    if ($('#cheie').val() == 0 || $('#parteneri').val() == 0 || $('#resurse').val() == 0 || $('#vanzari').val() == 0 || $('#structura').val() == 0 || $('#strucura-vanzarilor').val() == 0) {
        $('.error-2').append("<p class='sub-title margin30 color-red'>Toate câmpurile sunt obligatorii</p>");
    } else {
        $(".second").hide();
        $(".third").css('display', 'flex');
    }
})

$('.payment-check').click(function() {
    // if ($('#judete').val() == 0 && $('#oras').val() == 0 && $('#adresa').val().length === 0) {input-hobby
    if ($('#card-number').val() == 0 || $('#cvv').val() == 0 || $('#data-expirare').val() == 0 || $('#nume-posesor').val() == 0 ) {
        $('.error-3').append("<p class='sub-title margin30 color-red'>Toate câmpurile sunt obligatorii</p>");
    } else {
        $(".popup.payment").removeClass("show");
        $(".third").hide();
        $(".four").css('display', 'flex');
    }
})

$('.four-btn').click(function(){
    $(".third").hide();
    $(".four").css('display', 'flex');
})

$('.back').click(function(){
    $('.second').hide();
    $('.first').css('display', 'flex');
})

$(".back-first").click(function(){
    $(".second").hide();
    $(".first").css('display', 'flex');
})

$(".buy-promo").click(function(){
    $(".popup.payment").addClass("show");
})
$(".close-btn").click(function(){
        $(this).parents(".section").removeClass("show");
    })
});
</script>
<script type="text/javascript">
// function GetCardType(number)
// {
//     // visa
//     var re = new RegExp("^4");
//     if (number.match(re) != null)
//         return "Visa";

//     // Mastercard 
//     // Updated for Mastercard 2017 BINs expansion
//      if (/^(5[1-5][0-9]{14}|2(22[1-9][0-9]{12}|2[3-9][0-9]{13}|[3-6][0-9]{14}|7[0-1][0-9]{13}|720[0-9]{12}))$/.test(number)) 
//         return "Mastercard";

//     // AMEX
//     re = new RegExp("^3[47]");
//     if (number.match(re) != null)
//         return "AMEX";

//     // Discover
//     re = new RegExp("^(6011|622(12[6-9]|1[3-9][0-9]|[2-8][0-9]{2}|9[0-1][0-9]|92[0-5]|64[4-9])|65)");
//     if (number.match(re) != null)
//         return "Discover";

//     // Diners
//     re = new RegExp("^36");
//     if (number.match(re) != null)
//         return "Diners";

//     // Diners - Carte Blanche
//     re = new RegExp("^30[0-5]");
//     if (number.match(re) != null)
//         return "Diners - Carte Blanche";

//     // JCB
//     re = new RegExp("^35(2[89]|[3-8][0-9])");
//     if (number.match(re) != null)
//         return "JCB";

//     // Visa Electron
//     re = new RegExp("^(4026|417500|4508|4844|491(3|7))");
//     if (number.match(re) != null)
//         return "Visa Electron";

//     return "";
// }
</script>
</body>
</html>
