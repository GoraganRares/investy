<?php require_once "design/dependecies.php"; ?>
<title>Investy - Register succes</title>
<body class="login-register-page">
<?php require_once "design/nav.php"; ?>
<section class="login register-succes padding-all flex row section-block">
    <div class="bog-login left-container flex1">
        <div class="column-left">
            <div class="box-subtitle width100 margin20 row-left">
                <div class="line"></div>
                <h2 class="sub-title">Contul tău a fost creat cu succes</h2>
            </div>
            <h2 class="sub-title margin20">Apasă pe link-ul primit pe email pentru a-ți verifica adresa</h2>
            <div class="cont-email row-left width100">
                <a href="cont.php" class="blue-btn row-left mr20">Contul meu<img class="icon" src="./static/content/icons/user-icon.svg" alt="user-icon"></a>
                <span class="blue-color pointer underline">Retrimite emailul</span>
            </div>
        </div>
    </div>
    <div class="right-container flex flex1">
        <div class="login-img"></div>
        <h2 class="title white-color">The Barberzz<br/> Investiție de <span class="blue-color">55.000€</span></h2>
    </div>
</section>
<!-- 
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
$(".register-succes-btn").click(function(){
    $(".register-box").hide();
    $(".register-succes").css('display', 'flex');
})
</script> -->
</body>
</html>
