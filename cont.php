<?php require_once "design/dependecies.php"; ?>
<title>Investy - Cont</title>
<body>
<?php require_once "design/nav.php"; ?>

<section class="complete-profile header-element padding-all row not-fullscreen">
    <div class="box pc width100 row">
        <img class='icon' src="./static/content/icons/id-badge.svg" alt="id-badge">
        <p class="description white-color">Completează-ți profilul pentru a putea beneficia de funcțiile Investy. Durează doar câteva minute</p>
        <a href="completeaza-profilul.php" class="blue-btn">Completează profilul</a>
    </div>
    <div class="box phone-cont width100 row">
        <img class='icon' src="./static/content/icons/id-badge.svg" alt="id-badge">
        <div class="row none">
            <p class="description white-color">Completează-ți profilul pentru a putea beneficia de funcțiile Investy. Durează doar câteva minute</p>
            <a href="completeaza-profilul.php" class="blue-btn">Completează profilul</a>
        </div>
    </div>
</section>

<section class="cont column-left padding-all not-fullscreen">
    <div class="box-subtitle width100 margin20 row-left show">
        <div class="line"></div>
        <h2 class="sub-title">Contul meu</h2>
    </div>
    <div class="box-all row-left width100">
        <div id="cont-options" class="left-cotainer column-left">
            <a href="#" class="row-left blue-btn sub-title margin20 option-cont active"><img src="./static/content/icons/user-icon-black.svg" alt="cont-icon" class="icon"/>Profilul tău</a>
            <a href="#" class="row-left blue-btn sub-title margin20 option-cont"><img src="./static/content/icons/cont/edit-black.svg" alt="idei-depuse-icon" class="icon"/>Idei depuse</a>
            <a href="#" class="row-left blue-btn sub-title margin20 option-cont"><img src="./static/content/icons/cont/bell-ring-black.svg" alt="idei-depuse-icon" class="icon"/>Notificări</a>
            <a href="#" class="row-left blue-btn sub-title margin20 option-cont"><img src="./static/content/icons/cont/briefcase-black.svg" alt="brief-case-black" class="icon"/>Date cont</a>
            <a href="#" class="row-left blue-btn sub-title margin20 option-cont"><img src="./static/content/icons/cont/sign-out-black.svg" alt="sing-out-black" class="icon"/>Ieși din cont</a>
        </div>
        <div class="right-container width100">
            <div class="box-all row-left width100">
                <div class="box-option column-left width100">
                    <div class="option row-left width100">
                        <div class="section-cont date-profil active width100 row date-cont-pop">
                            <div class='column-left width100'>
                                <?php require_once "design/others/judete.php"; ?>
                                <textarea type="text" name="email" placeholder="Adresă" class="margin20 login-input" required></textarea>
                                <a class="blue-btn">Salvează</a>
                            </div>
                            <div class='column width100'>
                                <div class="box-img margin20">
                                    <svg class='icons' xmlns="http://www.w3.org/2000/svg" width="13.938" height="18.583" viewBox="0 0 13.938 18.583">
                                        <g id="user_1_" data-name="user (1)" transform="translate(-3)">
                                            <path id="Path_139" data-name="Path 139" d="M10.646,9.292A4.646,4.646,0,1,0,6,4.646a4.646,4.646,0,0,0,4.646,4.646Zm0-7.743a3.1,3.1,0,1,1-3.1,3.1,3.1,3.1,0,0,1,3.1-3.1Z" transform="translate(-0.677)" fill="#fff"/>
                                            <path id="Path_140" data-name="Path 140" d="M9.969,14A6.977,6.977,0,0,0,3,20.969a.774.774,0,1,0,1.549,0,5.42,5.42,0,1,1,10.84,0,.774.774,0,0,0,1.549,0A6.977,6.977,0,0,0,9.969,14Z" transform="translate(0 -3.16)" fill="#fff"/>
                                        </g>
                                    </svg>
                                    <img src="./static/content/icons/background-cont.svg" alt="background-cont">
                                </div>
                                <div class="row pointer">
                                    <img class='icon' src="./static/content/icons/portrait.svg" alt="portrait">
                                    <a class='description blue-color'>Adaugă poza de profil</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="option row-left row-up">
                        <div class="section-cont max-width700 width100 column-left date-cont-pop">
                            <div class="faq-box">
                                <div class="box-idei faq-btn margin20 row">
                                    <div class="row">
                                        <span class="fw600">Status: <b class="standby">Trimisă</b></span>
                                        <span class="display-none">Magazin online de tablouri personalizate</span>
                                        <img class="arrow-down" src="./static/content/icons/angle-small-left.svg" alt="arrow-down">
                                    </div>
                                    <span class="display-show">Magazin online de tablouri personalizate</span>
                                </div>
                                <div class="box-idei status-answ margin20 row">
                                    <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos odio nam mollitia. Ut dicta alias, hic rem voluptatem nisi nam distinctio ullam corrupti amet, atque possimus minima exercitationem ipsam quo?</span>
                                </div>
                            </div>
                            <div class="faq-box">
                                <div class="box-idei faq-btn margin20 row">
                                    <div class="row">
                                        <span class="fw600">Status: <b class="standby">Trimisă</b></span>
                                        <span class="display-none">Magazin online de tablouri personalizate</span>
                                        <img class="arrow-down" src="./static/content/icons/angle-small-left.svg" alt="arrow-down">
                                    </div>
                                    <span class="display-show">Magazin online de tablouri personalizate</span>
                                </div>
                                <div class="box-idei status-answ margin20 row">
                                    <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos odio nam mollitia. Ut dicta alias, hic rem voluptatem nisi nam distinctio ullam corrupti amet, atque possimus minima exercitationem ipsam quo?</span>
                                </div>
                            </div>
                            <div class="faq-box">
                                <div class="box-idei faq-btn margin20 row">
                                    <div class="row">
                                        <span class="fw600">Status: <b class="standby">Trimisă</b></span>
                                        <span class="display-none">Magazin online de tablouri personalizate</span>
                                        <img class="arrow-down" src="./static/content/icons/angle-small-left.svg" alt="arrow-down">
                                    </div>
                                    <span class="display-show">Magazin online de tablouri personalizate</span>
                                </div>
                                <div class="box-idei status-answ margin20 row">
                                    <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos odio nam mollitia. Ut dicta alias, hic rem voluptatem nisi nam distinctio ullam corrupti amet, atque possimus minima exercitationem ipsam quo?</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="option row-left">
                        <div class="section-cont max-width700 width100 column-left date-cont-pop">
                            <div id="faq" class="faq-box">
                                <div class="box-idei faq-btn margin20 row">
                                    <div class="row">
                                        <span class="fw600">02/05/2022</span>
                                        <span class="display-none">Un investitor a acceptat propunerea ta de afacere</span>
                                        <img class="arrow-down active-arrow" src="./static/content/icons/angle-small-left.svg" alt="arrow-down">
                                    </div>
                                    <span class="display-show">Magazin online de tablouri personalizate</span>
                                    
                                </div>
                                <div class="box-idei status-answ margin20 row">
                                    <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris placerat erat at velit interdum laoreet. Donec ultrices nec nibh id pellentesque. Orci letius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec mollis quam dolor. Ut vel ipsum vitae arcu placerat malesuada. Donec ac leo egestas nisi dignissim eleifend. Cras tincidunt consequat felis, sit amet eleifend lorem aliquet sed.</p>
                                </div>
                            </div>
                            <div class="faq-box">
                                <div class="box-idei faq-btn margin20 row">
                                    <div class="row">
                                        <span class="fw600">02/05/2022</span>
                                        <span class="display-none">Un investitor a acceptat propunerea ta de afacere</span>
                                        <img class="arrow-down active-arrow" src="./static/content/icons/angle-small-left.svg" alt="arrow-down">
                                    </div>
                                    <span class="display-show">Magazin online de tablouri personalizate</span>
                                    
                                </div>
                                <div class="box-idei status-answ margin20 row">
                                    <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris placerat erat at velit interdum laoreet. Donec ultrices nec nibh id pellentesque. Orci letius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec mollis quam dolor. Ut vel ipsum vitae arcu placerat malesuada. Donec ac leo egestas nisi dignissim eleifend. Cras tincidunt consequat felis, sit amet eleifend lorem aliquet sed.</p>
                                </div>
                            </div>
                            <div class="faq-box">
                                <div class="box-idei faq-btn margin20 row">
                                    <div class="row">
                                        <span class="fw600">02/05/2022</span>
                                        <span class="display-none">Un investitor a acceptat propunerea ta de afacere</span>
                                        <img class="arrow-down active-arrow" src="./static/content/icons/angle-small-left.svg" alt="arrow-down">
                                    </div>
                                    <span class="display-show">Magazin online de tablouri personalizate</span>
                                    
                                </div>
                                <div class="box-idei status-answ margin20 row">
                                    <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris placerat erat at velit interdum laoreet. Donec ultrices nec nibh id pellentesque. Orci letius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec mollis quam dolor. Ut vel ipsum vitae arcu placerat malesuada. Donec ac leo egestas nisi dignissim eleifend. Cras tincidunt consequat felis, sit amet eleifend lorem aliquet sed.</p>
                                </div>
                            </div>
                            <div class="faq-box">
                                <div class="box-idei faq-btn margin20 row">
                                    <div class="row">
                                        <span class="fw600">02/05/2022</span>
                                        <span class="display-none">Un investitor a acceptat propunerea ta de afacere</span>
                                        <img class="arrow-down active-arrow" src="./static/content/icons/angle-small-left.svg" alt="arrow-down">
                                    </div>
                                    <span class="display-show">Magazin online de tablouri personalizate</span>
                                    
                                </div>
                                <div class="box-idei status-answ margin20 row">
                                    <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris placerat erat at velit interdum laoreet. Donec ultrices nec nibh id pellentesque. Orci letius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec mollis quam dolor. Ut vel ipsum vitae arcu placerat malesuada. Donec ac leo egestas nisi dignissim eleifend. Cras tincidunt consequat felis, sit amet eleifend lorem aliquet sed.</p>
                                </div>
                            </div>
                            <div class="faq-box">
                                <div class="box-idei faq-btn margin20 row">
                                    <div class="row">
                                        <span class="fw600">02/05/2022</span>
                                        <span class="display-none">Un investitor a acceptat propunerea ta de afacere</span>
                                        <img class="arrow-down active-arrow" src="./static/content/icons/angle-small-left.svg" alt="arrow-down">
                                    </div>
                                    <span class="display-show">Magazin online de tablouri personalizate</span>
                                    
                                </div>
                                <div class="box-idei status-answ margin20 row">
                                    <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris placerat erat at velit interdum laoreet. Donec ultrices nec nibh id pellentesque. Orci letius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec mollis quam dolor. Ut vel ipsum vitae arcu placerat malesuada. Donec ac leo egestas nisi dignissim eleifend. Cras tincidunt consequat felis, sit amet eleifend lorem aliquet sed.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="option row-left">
                        <div class="section-cont width100 column-left date-cont-pop">
                            <h2 class="title sub-title orange-color margin20">Editează datele contului tău</h2>
                            <input type="text" name="username" placeholder="username (max. 16 caractere)" class="login-input margin20" required />
                            <input type="text" name="name" placeholder="Nume întreg" class="login-input margin20" required />
                            <input type="text" name="email" placeholder="email" class="login-input" required/>
                            <div class="box-pass flex margin-top20 margin20 width100">
                                <input type="password" autocomplete="current-password"  name="password" placeholder="parola" class="login-input idpassword" required/>
                                <i class="far fa-eye togglePassword"></i>
                            </div>
                            <input type="password" autocomplete="current-password"  name="password" placeholder="parola" class="login-input margin20 idpassword" required/>
                            <button type="button" class="blue-btn register-succes-btn max-width400 margin40">Salvează</button>
                            <button style="background-color: #FF0000" type="button" class="blue-btn max-width400 register-succes-btn margin20">Șterge contul</button>
                        </div>
                    </div>
                    <div class="option row-left">
                        <div class="section-cont max-width500 width100 column-left date-cont-pop">
                            <div class="box-grey margin20">
                                <p class="color-black">Te-ai deconectat cu succes</p>
                            </div>
                            <a style="width: auto" href="index.php" class="blue-btn">ÎNAPOI LA PAGINA PRINCIPALĂ</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once "design/footer.php"; ?>
<script>

let header = document.getElementById("cont-options");
let btns = header.getElementsByClassName("option-cont");
for (let i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
  let current = document.getElementsByClassName("active");
  current[0].className = current[0].className.replace(" active", "");
  this.className += " active";
  });
}

$(".left-cotainer a").click (function (e) {

    e.preventDefault();
    let index = Array.prototype.indexOf.call($(".left-cotainer")[0].children, this);

    $(".right-container .box-option .option .section-cont").removeClass("active");
    $($(".right-container .box-option .option .section-cont")[index]).addClass("active");

});

let faq = document.getElementsByClassName("faq-btn");
let i;

for (i = 0; i < faq.length; i++) {
    faq[i].addEventListener("click", function () {
        this.classList.toggle("active");
        let body = this.nextElementSibling;
        if (body.style.display === "flex") {
            body.style.display = "none";
        } else {
            body.style.display = "flex";
            body.style.visibility = "visible";
            body.style.opacity = "1";
            body.style.transition = "visibility 0s, opacity 0.5s linear";
            body.style.borderRadius = "0px 0px 25px 25px";
        }
    });
}
</script>
</body>
</html>
