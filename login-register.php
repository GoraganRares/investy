<?php require_once "design/dependecies.php"; ?>
<title>Investy - Login</title>
<script src="static/js/account.js"></script>

<body class="login-register-page">
<?php require_once "design/nav.php"; ?>
<section class="login login-box padding-all flex row section-block">
    <div class="bog-login left-container flex1">
        <div class="column-left max-width400">
            <h3 class="sub-title margin20">Nu ai un cont? <a class="underline register-btn">Înregistrează-te</a></h3>
            <input type="text" name="email" placeholder="email" class="login-input" required/>
            <div class="box-pass flex margin-top20 margin20 width100">
                <input type="password" autocomplete="current-password"  name="password" placeholder="parola" class="login-input idpassword" required/>
                <i class="far fa-eye togglePassword"></i>
            </div>
            <h3 class="sub-title margin20 blue-color">Ți-ai uitat parola? <a class="underline f-pass-btn"> Apasă aici</a></h3>
            <button class="blue-btn margin20">Login</button>
            <h3 class="sub-title margin20">Sau loghează-te folosind</h3>
        </div>
    </div>
    <div class="right-container flex flex1">
        <div class="register-img"></div>
        <h2 class="title white-color">Restaurant Alexo <br/> Investiție de <span class="blue-color"> 60.000€</span></h2>
    </div>
</section>
<section class="login register-box padding-all flex row section-block">
    <div class="bog-login left-container flex1">
        <div class="column-left max-width400">
            <h3 class="sub-title margin20">Ai deja cont? <a class="underline login-btn">Loghează-te</a></h3>
            <input type="text" name="username" placeholder="username (max. 16 caractere)" class="login-input margin20" required />
            <input type="text" name="name" placeholder="Nume întreg" class="login-input margin20" required />
            <input type="text" name="email" placeholder="email" class="login-input" required/>
            <div class="box-pass flex margin-top20 margin20 width100">
                <input type="password" autocomplete="current-password"  name="password" placeholder="parola" class="login-input idpassword" required/>
                <i class="far fa-eye togglePassword"></i>
            </div>
            <input type="password" autocomplete="current-password"  name="password" placeholder="parola" class="login-input margin20 idpassword" required/>
            <label class="container margin20"><span class="sub-title description input-span">Sunt de acord cu termenii și condițiile</span>
                <input class='radio' type="radio" name="termeni">
                <span class="checkmark"></span>
            </label>
            <a href='register-succes.php' type="button" class="blue-btn margin20">Register</a>
            <h3 class="sub-title margin20">Sau înregistreză-te folosind</h3>
        </div>
    </div>
    <div class="right-container flex flex1">
        <div class="login-img"></div>
        <h2 class="title white-color">The Barberzz<br/> Investiție de <span class="blue-color">55.000€</span></h2>
    </div>
</section>
<section class="login f-pass padding-all flex row section-block">
    <div class="bog-login left-container flex1">
        <div class="column-left margin-auto max-width400">
            <h3 class="sub-title margin20">Ți-ai uitat parola?</a></h3>
            <p class="description margin20">Introdu adresa de e-mail furnizată când te-ai înregistrat și noi îți vom trimite o nouă parolă imediat:</p>
            <input type="text" name="email" placeholder="email" class="login-input margin20" required/>
            <button type="button" class="blue-btn f-pass-succes-btn margin20">Register</button>
        </div>
    </div>
</section>
<section class="login f-pass-succes padding-all flex row section-block">
    <div class="bog-login left-container flex1">
        <div class="column-left margin-auto max-width400">
            <p class="description margin20">Dacă adresa de email există în baza noastră de date, link-ul de resetare al parolei va fi trimis la acea adresă</p>
            <button type="button" class="blue-btn login-btn">Login</button>
        </div>
    </div>
</section>

<script>
$(".f-pass-btn").click(function(){
    $(".login-box").hide();
    $(".f-pass").css('display', 'flex');
    $(".login-register-page .navigation .nav-container .nav-list .lg-not").css('display', 'flex');
    $(".login-register-page .navigation .nav-container .nav-list.ml10").css({'margin-left':'100px'});
    $(".login-register-page .navigation .nav-container .nav-list .flex .nav-item").css('padding', '0px 16px');
})
$(".f-pass-succes-btn").click(function(){
    $(".f-pass").hide();
    $(".f-pass-succes").css('display', 'flex');
    $(".login-register-page .navigation .nav-container .nav-list .lg-not").css('display', 'flex');
    $(".login-register-page .navigation .nav-container .nav-list.ml10").css({'margin-left':'100px'});
    $(".login-register-page .navigation .nav-container .nav-list .flex .nav-item").css('padding', '0px 16px');
})
$(".register-btn").click(function(){
    $(".login-box").hide();
    $(".register-box").css('display', 'flex');
    
})
$(".login-btn").click(function(){
    $(".register-box").hide();
    $(".login-box").css('display', 'flex');
    $(".login-register-page .navigation .nav-container .nav-list .lg-yes").css('display', 'none');
    $(".login-register-page .navigation .nav-container .nav-list.ml10").css( {marginLeft : "10px"});
    $(".login-register-page .navigation .nav-container .nav-list .flex .nav-item").css('padding', '0px 8px');
})
</script>
</body>
</html>
