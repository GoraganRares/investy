<?php require_once "design/dependecies.php"; ?>
<title>Investy - Cont</title>
<script src="static/js/account.js"></script>
<body>
<?php require_once "design/nav.php"; ?>

<section class="complete-profile header-element padding-all row not-fullscreen">
    <div class="box pc width100 row">
        <img class='icon' src="./static/content/icons/trophy.svg" alt="id-badge">
        <p class="description white-color">Felicitări! Propunerea ta a fost acceptată către o nouă fază. Completează formularul pentru a obține investiția.</p>
        <a href="obtine-investitie.php" class="blue-btn">Obține investiția</a>
    </div>
    <div class="box phone-cont width100 row">
        <img class='icon' src="./static/content/icons/trophy.svg" alt="id-badge">
        <div class="row none">
            <p class="description white-color">Felicitări! Propunerea ta a fost acceptată către o nouă fază. Completează formularul pentru a obține investiția.</p>
            <a href="obtine-investitie.php" class="blue-btn">Obține investiția</a>
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
                                <textarea type="text" name="adresa" placeholder="Adresă" class="margin20 login-input" required></textarea>
                                <h3 class="description margin10">Adaugă limbile vorbite</h3>
                                <div class="limba-box-all width100">
                                    <div class="limba-container margin20 row relative">
                                        <?php require_once "design/others/limbi.php"; ?>
                                    </div>
                                </div>
                                <button class="description limba-btn pointer underline margin20 blue-color">Adaugă limba vorbită</button>
                                <div class="hobby-container margin20 width100">
                                    <div class="margin20 hobby-box relative">
                                        <input id='input-hobby' type="text" name="hobby" placeholder="Adaugă unul din hobby-urile tale*" class="login-input input-hobby" required />
                                        <img id='button' class='remove-icon plus-btn pointer' src='./static/content/icons/add.svg' alt='remove-icon' class='icons'>

                                        <!-- <img class='remove-icon plus-btn pointer' src='./static/content/icons/add.svg' alt='remove-icon' class='icons'> -->
                                    </div>
                                    <ul class='hobby-list'>
                                    <!-- <div class='hobby-box row margin20'><li class='hobby-text description blue-color'>da</li><img class='remove-hobby pointer' src='./static/content/icons/cross-circle.svg' alt='remove-icon' class='icons'></div> -->
                                    </ul>
                                </div>
                                <div class="box-docs study-btn relative margin40 row-left">
                                    <img class='icon' src="./static/content/icons/add.svg" alt="map-marker">
                                    <div class="column-left">
                                        <h3 class="sub-title">Adaugă studiile</h3>
                                    </div>
                                </div>
                                <div id='result' class="result-study result step width100 margin40 row-left">
                                    <div class="column-left">
                                        <span id='result-institutie' class='sub-title'></span>
                                        <span id='result-calificare' class="description blue-color"></span>
                                        <span id='result-localitate-tara' class="description blue-color"></span>
                                        <span id='result-date-inceput-sfarsit' class="description blue-color"></span>
                                    </div>
                                    <div class="edit-delete row-left">
                                        <img class='icon study-btn mr10' src="./static/content/icons/pencil.svg" alt="edit">
                                        <img class='icon delete-study' src="./static/content/icons/delete.svg" alt="delete">
                                    </div>
                                </div>
                                <div class="box-docs experienta-btn relative margin40 row-left">
                                    <img class='icon' src="./static/content/icons/add.svg" alt="map-marker">
                                    <div class="column-left">
                                        <h3 class="sub-title">Adaugă experiența</h3>
                                    </div>
                                </div>
                                <div id='result' class="result-experienta result step width100 margin40 row-left">
                                    <div class="column-left">
                                        <span id='result-post-ocupat' class='sub-title'></span>
                                        <span id='result-firma-lucrat' class="description blue-color"></span>
                                        <span id='result-localitate-tara-experienta' class="description blue-color"></span>
                                        <span id='result-date-inceput-sfarsit-experienta' class="description blue-color"></span>
                                    </div>
                                    <div class="edit-delete row-left">
                                        <img class='icon experienta-btn mr10' src="./static/content/icons/pencil.svg" alt="edit">
                                        <img class='icon delete-experienta' src="./static/content/icons/delete.svg" alt="delete">
                                    </div>
                                </div>
                                <button id="update_profile" class="blue-btn">Salvează</button>
                            </div>
                            <div class='column width100'>
                                <div class="box-img margin20">
                                    <!-- <svg class='icons' xmlns="http://www.w3.org/2000/svg" width="13.938" height="18.583" viewBox="0 0 13.938 18.583">
                                        <g id="user_1_" data-name="user (1)" transform="translate(-3)">
                                            <path id="Path_139" data-name="Path 139" d="M10.646,9.292A4.646,4.646,0,1,0,6,4.646a4.646,4.646,0,0,0,4.646,4.646Zm0-7.743a3.1,3.1,0,1,1-3.1,3.1,3.1,3.1,0,0,1,3.1-3.1Z" transform="translate(-0.677)" fill="#fff"/>
                                            <path id="Path_140" data-name="Path 140" d="M9.969,14A6.977,6.977,0,0,0,3,20.969a.774.774,0,1,0,1.549,0,5.42,5.42,0,1,1,10.84,0,.774.774,0,0,0,1.549,0A6.977,6.977,0,0,0,9.969,14Z" transform="translate(0 -3.16)" fill="#fff"/>
                                        </g>
                                    </svg> -->
                                    <!-- <img src="./static/content/icons/background-cont.svg" alt="background-cont"> -->
                                </div>
                                <div class="relative row pointer">
                                    <img class='icon' src="./static/content/icons/portrait.svg" alt="portrait">
                                    <input id='poza-profil' style="width: 100%; height: 100%; cursor: pointer; position: absolute; top: 0; left: 0; opacity: 0;" type="file">
                                    <a class='description blue-color'>Editează poza de profil</a>
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


<div class="popup studii section">
    <div class="popup-box relative column-left">
        <div class="relative close-box width100 row">
            <p class="description">Adaugă studiile sau calificările</p>
            <img class='close close-btn pointer' src='./static/content/icons/x.svg' alt='remove-icon' class='icons'>
        </div>
        <input id='numele-institutie' type="text" name="numele-institutie" placeholder="Numele instituție*" class="login-input width100 margin20" required />
        <input id='calificare' type="text" name="calificare-profilului" placeholder="Calificare/profilul*" class="login-input width100 margin20" required />
        <div class="row localitate-box width100 margin20">
            <input id='localitate' type="text" name="localitate" placeholder="Localitate*" class="login-input" required />
            <select id='tari' class='login-input' name="addressCountry">
                <option hidden>Țară*</option>
                <option value="RO">România</option>
                <option value="GB">Regatul Unitate</option>
                <option value="AL">Albania</option>
                <option value="AD">Andorra</option>
                <option value="AT">Austria</option>
                <option value="BY">Bielorusia</option>
                <option value="BE">Belgia</option>
                <option value="BA">Bosnia si Hertegovina</option>
                <option value="BG">Bulgaria</option>
                <option value="HR">Croaţia</option>
                <option value="CY">Cipru</option>
                <option value="CZ">Republica Cehă</option>
                <option value="FR">Franţa</option>
                <option value="GI">Gibraltar</option>
                <option value="DE">Germania</option>
                <option value="GR">Grecia</option>
                <option value="VA">Vatican</option>
                <option value="HU">Ungaria</option>
                <option value="IT">Italia</option>
                <option value="LI">Liechtenstein</option>
                <option value="LU">Luxemburg</option>
                <option value="MK">Macedonia</option>
                <option value="MT">Malta</option>
                <option value="MD">Moldova</option>
                <option value="MC">Monaco</option>
                <option value="ME">Muntenegru</option>
                <option value="NL">Olanda</option>
                <option value="PL">Polonia</option>
                <option value="PT">Portugalia</option>
                <option value="SM">San Marino</option>
                <option value="RS">Serbia</option>
                <option value="SK">Slovacia</option>
                <option value="SI">Slovenia</option>
                <option value="ES">Spania</option>
                <option value="UA">Ucraina</option>
                <option value="DK">Danemarca</option>
                <option value="EE">Estonia</option>
                <option value="FO">Insulele Feroe</option>
                <option value="FI">Finlanda</option>
                <option value="GL">Groenlanda</option>
                <option value="IS">Islanda</option>
                <option value="IE">Irlanda</option>
                <option value="LV">Letonia</option>
                <option value="LT">Lituania</option>
                <option value="NO">Norvegia</option>
                <option value="SJ">Insulele Svalbard și Jan Mayen</option>
                <option value="SE">Suedia</option>
                <option value="CH">Elveţia</option>
                <option value="TR">Curcan</option>
            </select>
        </div>
        <label class="container margin60"><span class="sub-title description input-span">Sunt student aici în prezent</span>
            <input class='radio' type="radio" name="termeni">
            <span class="checkmark"></span>
        </label>
        <div class="row data-box width100">
            <div class="column-left">
                <h3 class="sub-title margin10">Data de început</h3>
                <select id='date-inceput' style='padding-right: 40px;' class='login-input' id="year" name="year">
                    <option hidden>An</option>
                    <option value="1940">1940</option>
                    <option value="1941">1941</option>
                    <option value="1942">1942</option>
                    <option value="1943">1943</option>
                    <option value="1944">1944</option>
                    <option value="1945">1945</option>
                    <option value="1946">1946</option>
                    <option value="1947">1947</option>
                    <option value="1948">1948</option>
                    <option value="1949">1949</option>
                    <option value="1950">1950</option>
                    <option value="1951">1951</option>
                    <option value="1952">1952</option>
                    <option value="1953">1953</option>
                    <option value="1954">1954</option>
                    <option value="1955">1955</option>
                    <option value="1956">1956</option>
                    <option value="1957">1957</option>
                    <option value="1958">1958</option>
                    <option value="1959">1959</option>
                    <option value="1960">1960</option>
                    <option value="1961">1961</option>
                    <option value="1962">1962</option>
                    <option value="1963">1963</option>
                    <option value="1964">1964</option>
                    <option value="1965">1965</option>
                    <option value="1966">1966</option>
                    <option value="1967">1967</option>
                    <option value="1968">1968</option>
                    <option value="1969">1969</option>
                    <option value="1970">1970</option>
                    <option value="1971">1971</option>
                    <option value="1972">1972</option>
                    <option value="1973">1973</option>
                    <option value="1974">1974</option>
                    <option value="1975">1975</option>
                    <option value="1976">1976</option>
                    <option value="1977">1977</option>
                    <option value="1978">1978</option>
                    <option value="1979">1979</option>
                    <option value="1980">1980</option>
                    <option value="1981">1981</option>
                    <option value="1982">1982</option>
                    <option value="1983">1983</option>
                    <option value="1984">1984</option>
                    <option value="1985">1985</option>
                    <option value="1986">1986</option>
                    <option value="1987">1987</option>
                    <option value="1988">1988</option>
                    <option value="1989">1989</option>
                    <option value="1990">1990</option>
                    <option value="1991">1991</option>
                    <option value="1992">1992</option>
                    <option value="1993">1993</option>
                    <option value="1994">1994</option>
                    <option value="1995">1995</option>
                    <option value="1996">1996</option>
                    <option value="1997">1997</option>
                    <option value="1998">1998</option>
                    <option value="1999">1999</option>
                    <option value="2000">2000</option>
                    <option value="2001">2001</option>
                    <option value="2002">2002</option>
                    <option value="2003">2003</option>
                    <option value="2004">2004</option>
                    <option value="2005">2005</option>
                    <option value="2006">2006</option>
                    <option value="2007">2007</option>
                    <option value="2008">2008</option>
                    <option value="2009">2009</option>
                    <option value="2010">2010</option>
                    <option value="2011">2011</option>
                    <option value="2012">2012</option>
                    <option value="2013">2013</option>
                    <option value="2014">2014</option>
                    <option value="2015">2015</option>
                    <option value="2016">2016</option>
                    <option value="2017">2017</option>
                    <option value="2018">2018</option>
                    <option value="2019">2019</option>
                    <option value="2020">2020</option>
                    <option value="2021">2021</option>
                    <option value="2022">2022</option>
                </select>
            </div>
            <div class="column-left">
                <h3 class="sub-title margin10">Data de sfârșit</h3>
                <select id='date-sfarsit' style='padding-right: 40px;' class='login-input' id="year" name="year">
                    <option hidden>An</option>
                    <option value="1940">1940</option>
                    <option value="1941">1941</option>
                    <option value="1942">1942</option>
                    <option value="1943">1943</option>
                    <option value="1944">1944</option>
                    <option value="1945">1945</option>
                    <option value="1946">1946</option>
                    <option value="1947">1947</option>
                    <option value="1948">1948</option>
                    <option value="1949">1949</option>
                    <option value="1950">1950</option>
                    <option value="1951">1951</option>
                    <option value="1952">1952</option>
                    <option value="1953">1953</option>
                    <option value="1954">1954</option>
                    <option value="1955">1955</option>
                    <option value="1956">1956</option>
                    <option value="1957">1957</option>
                    <option value="1958">1958</option>
                    <option value="1959">1959</option>
                    <option value="1960">1960</option>
                    <option value="1961">1961</option>
                    <option value="1962">1962</option>
                    <option value="1963">1963</option>
                    <option value="1964">1964</option>
                    <option value="1965">1965</option>
                    <option value="1966">1966</option>
                    <option value="1967">1967</option>
                    <option value="1968">1968</option>
                    <option value="1969">1969</option>
                    <option value="1970">1970</option>
                    <option value="1971">1971</option>
                    <option value="1972">1972</option>
                    <option value="1973">1973</option>
                    <option value="1974">1974</option>
                    <option value="1975">1975</option>
                    <option value="1976">1976</option>
                    <option value="1977">1977</option>
                    <option value="1978">1978</option>
                    <option value="1979">1979</option>
                    <option value="1980">1980</option>
                    <option value="1981">1981</option>
                    <option value="1982">1982</option>
                    <option value="1983">1983</option>
                    <option value="1984">1984</option>
                    <option value="1985">1985</option>
                    <option value="1986">1986</option>
                    <option value="1987">1987</option>
                    <option value="1988">1988</option>
                    <option value="1989">1989</option>
                    <option value="1990">1990</option>
                    <option value="1991">1991</option>
                    <option value="1992">1992</option>
                    <option value="1993">1993</option>
                    <option value="1994">1994</option>
                    <option value="1995">1995</option>
                    <option value="1996">1996</option>
                    <option value="1997">1997</option>
                    <option value="1998">1998</option>
                    <option value="1999">1999</option>
                    <option value="2000">2000</option>
                    <option value="2001">2001</option>
                    <option value="2002">2002</option>
                    <option value="2003">2003</option>
                    <option value="2004">2004</option>
                    <option value="2005">2005</option>
                    <option value="2006">2006</option>
                    <option value="2007">2007</option>
                    <option value="2008">2008</option>
                    <option value="2009">2009</option>
                    <option value="2010">2010</option>
                    <option value="2011">2011</option>
                    <option value="2012">2012</option>
                    <option value="2013">2013</option>
                    <option value="2014">2014</option>
                    <option value="2015">2015</option>
                    <option value="2016">2016</option>
                    <option value="2017">2017</option>
                    <option value="2018">2018</option>
                    <option value="2019">2019</option>
                    <option value="2020">2020</option>
                    <option value="2021">2021</option>
                    <option value="2022">2022</option>
                </select>
            </div>
        </div>
        <button id='get-study' class="save save-btn close-btn blue-btn">Salvează</button>
    </div>
</div>
<div class="popup experience section">
    <div class="popup-box relative column-left">
        <div class="relative close-box width100 row">
            <p class="description">Adaugă experiența profesională</p>
            <img class='close close-btn pointer' src='./static/content/icons/x.svg' alt='remove-icon' class='icons'>
        </div>
        <input id='post-ocupat' type="text" name="post-ocupat" placeholder="Post-ocupat*" class="login-input width100 margin20" required />
        <input id='firma-lucrat' type="text" name="firma-lucrat" placeholder="Firma unde ai lucrat*" class="login-input width100 margin20" required />
        <div class="row localitate-box width100 margin20">
            <input id='localitate-experienta' type="text" name="localitate-experienta" placeholder="Localitate*" class="login-input" required />
            <select id='tari-experienta' class='login-input' name="tari-experienta">
                <option hidden>Țară*</option>
                <option value="RO">România</option>
                <option value="GB">Regatul Unitate</option>
                <option value="AL">Albania</option>
                <option value="AD">Andorra</option>
                <option value="AT">Austria</option>
                <option value="BY">Bielorusia</option>
                <option value="BE">Belgia</option>
                <option value="BA">Bosnia si Hertegovina</option>
                <option value="BG">Bulgaria</option>
                <option value="HR">Croaţia</option>
                <option value="CY">Cipru</option>
                <option value="CZ">Republica Cehă</option>
                <option value="FR">Franţa</option>
                <option value="GI">Gibraltar</option>
                <option value="DE">Germania</option>
                <option value="GR">Grecia</option>
                <option value="VA">Vatican</option>
                <option value="HU">Ungaria</option>
                <option value="IT">Italia</option>
                <option value="LI">Liechtenstein</option>
                <option value="LU">Luxemburg</option>
                <option value="MK">Macedonia</option>
                <option value="MT">Malta</option>
                <option value="MD">Moldova</option>
                <option value="MC">Monaco</option>
                <option value="ME">Muntenegru</option>
                <option value="NL">Olanda</option>
                <option value="PL">Polonia</option>
                <option value="PT">Portugalia</option>
                <option value="SM">San Marino</option>
                <option value="RS">Serbia</option>
                <option value="SK">Slovacia</option>
                <option value="SI">Slovenia</option>
                <option value="ES">Spania</option>
                <option value="UA">Ucraina</option>
                <option value="DK">Danemarca</option>
                <option value="EE">Estonia</option>
                <option value="FO">Insulele Feroe</option>
                <option value="FI">Finlanda</option>
                <option value="GL">Groenlanda</option>
                <option value="IS">Islanda</option>
                <option value="IE">Irlanda</option>
                <option value="LV">Letonia</option>
                <option value="LT">Lituania</option>
                <option value="NO">Norvegia</option>
                <option value="SJ">Insulele Svalbard și Jan Mayen</option>
                <option value="SE">Suedia</option>
                <option value="CH">Elveţia</option>
                <option value="TR">Curcan</option>
            </select>
        </div>
        <label class="container margin60"><span class="sub-title description input-span">Lucrez aici în prezent</span>
            <input class='radio' type="radio" name="termeni">
            <span class="checkmark"></span>
        </label>
        <div class="column-left data-box width100">
            <div class="column-left width100 margin30">
                <h3 class="sub-title margin10">Data de început</h3>
                <div class="row width100">
                    <select class='login-input' style='padding-right: 40px;' id="luna-inceput-experienta" name="luna-inceput-experienta">
                        <option hidden>Luna</option>
                        <option value="Ianuarie">Ianuarie</option>
                        <option value="Februarie">Februarie</option>
                        <option value="Martie">Martie</option>
                        <option value="Aprilie">Aprilie</option>
                        <option value="Mai">Mai</option>
                        <option value="Junie">Junie</option>
                        <option value="Julie">Julie</option>
                        <option value="August">August</option>
                        <option value="Septembrie">Septembrie</option>
                        <option value="Octombrie">Octombrie</option>
                        <option value="Noiembrie">Noiembrie</option>
                        <option value="Decembrie">Decembrie</option>
                    </select>
                    <select style='padding-right: 40px;' class='login-input' id="date-inceput-experienta" name="date-inceput-experienta">
                        <option hidden>An</option>
                        <option value="1940">1940</option>
                        <option value="1941">1941</option>
                        <option value="1942">1942</option>
                        <option value="1943">1943</option>
                        <option value="1944">1944</option>
                        <option value="1945">1945</option>
                        <option value="1946">1946</option>
                        <option value="1947">1947</option>
                        <option value="1948">1948</option>
                        <option value="1949">1949</option>
                        <option value="1950">1950</option>
                        <option value="1951">1951</option>
                        <option value="1952">1952</option>
                        <option value="1953">1953</option>
                        <option value="1954">1954</option>
                        <option value="1955">1955</option>
                        <option value="1956">1956</option>
                        <option value="1957">1957</option>
                        <option value="1958">1958</option>
                        <option value="1959">1959</option>
                        <option value="1960">1960</option>
                        <option value="1961">1961</option>
                        <option value="1962">1962</option>
                        <option value="1963">1963</option>
                        <option value="1964">1964</option>
                        <option value="1965">1965</option>
                        <option value="1966">1966</option>
                        <option value="1967">1967</option>
                        <option value="1968">1968</option>
                        <option value="1969">1969</option>
                        <option value="1970">1970</option>
                        <option value="1971">1971</option>
                        <option value="1972">1972</option>
                        <option value="1973">1973</option>
                        <option value="1974">1974</option>
                        <option value="1975">1975</option>
                        <option value="1976">1976</option>
                        <option value="1977">1977</option>
                        <option value="1978">1978</option>
                        <option value="1979">1979</option>
                        <option value="1980">1980</option>
                        <option value="1981">1981</option>
                        <option value="1982">1982</option>
                        <option value="1983">1983</option>
                        <option value="1984">1984</option>
                        <option value="1985">1985</option>
                        <option value="1986">1986</option>
                        <option value="1987">1987</option>
                        <option value="1988">1988</option>
                        <option value="1989">1989</option>
                        <option value="1990">1990</option>
                        <option value="1991">1991</option>
                        <option value="1992">1992</option>
                        <option value="1993">1993</option>
                        <option value="1994">1994</option>
                        <option value="1995">1995</option>
                        <option value="1996">1996</option>
                        <option value="1997">1997</option>
                        <option value="1998">1998</option>
                        <option value="1999">1999</option>
                        <option value="2000">2000</option>
                        <option value="2001">2001</option>
                        <option value="2002">2002</option>
                        <option value="2003">2003</option>
                        <option value="2004">2004</option>
                        <option value="2005">2005</option>
                        <option value="2006">2006</option>
                        <option value="2007">2007</option>
                        <option value="2008">2008</option>
                        <option value="2009">2009</option>
                        <option value="2010">2010</option>
                        <option value="2011">2011</option>
                        <option value="2012">2012</option>
                        <option value="2013">2013</option>
                        <option value="2014">2014</option>
                        <option value="2015">2015</option>
                        <option value="2016">2016</option>
                        <option value="2017">2017</option>
                        <option value="2018">2018</option>
                        <option value="2019">2019</option>
                        <option value="2020">2020</option>
                        <option value="2021">2021</option>
                        <option value="2022">2022</option>
                    </select>
                </div>
            </div>
            <div class="column-left width100">
                <h3 class="sub-title margin10">Data de sfârșit</h3>
                <div class="row width100">
                    <select class='login-input' style='padding-right: 40px;' id="luna-sfarsit-experienta" name="luna-inceput-experienta">
                        <option hidden>Luna</option>
                        <option value="Ianuarie">Ianuarie</option>
                        <option value="Februarie">Februarie</option>
                        <option value="Martie">Martie</option>
                        <option value="Aprilie">Aprilie</option>
                        <option value="Mai">Mai</option>
                        <option value="Junie">Junie</option>
                        <option value="Julie">Julie</option>
                        <option value="August">August</option>
                        <option value="Septembrie">Septembrie</option>
                        <option value="Octombrie">Octombrie</option>
                        <option value="Noiembrie">Noiembrie</option>
                        <option value="Decembrie">Decembrie</option>
                    </select>
                    <select style='padding-right: 40px;' class='login-input' id="date-sfarsit-experienta" name="date-sfarsit-experienta">
                        <option hidden>An</option>
                        <option value="1940">1940</option>
                        <option value="1941">1941</option>
                        <option value="1942">1942</option>
                        <option value="1943">1943</option>
                        <option value="1944">1944</option>
                        <option value="1945">1945</option>
                        <option value="1946">1946</option>
                        <option value="1947">1947</option>
                        <option value="1948">1948</option>
                        <option value="1949">1949</option>
                        <option value="1950">1950</option>
                        <option value="1951">1951</option>
                        <option value="1952">1952</option>
                        <option value="1953">1953</option>
                        <option value="1954">1954</option>
                        <option value="1955">1955</option>
                        <option value="1956">1956</option>
                        <option value="1957">1957</option>
                        <option value="1958">1958</option>
                        <option value="1959">1959</option>
                        <option value="1960">1960</option>
                        <option value="1961">1961</option>
                        <option value="1962">1962</option>
                        <option value="1963">1963</option>
                        <option value="1964">1964</option>
                        <option value="1965">1965</option>
                        <option value="1966">1966</option>
                        <option value="1967">1967</option>
                        <option value="1968">1968</option>
                        <option value="1969">1969</option>
                        <option value="1970">1970</option>
                        <option value="1971">1971</option>
                        <option value="1972">1972</option>
                        <option value="1973">1973</option>
                        <option value="1974">1974</option>
                        <option value="1975">1975</option>
                        <option value="1976">1976</option>
                        <option value="1977">1977</option>
                        <option value="1978">1978</option>
                        <option value="1979">1979</option>
                        <option value="1980">1980</option>
                        <option value="1981">1981</option>
                        <option value="1982">1982</option>
                        <option value="1983">1983</option>
                        <option value="1984">1984</option>
                        <option value="1985">1985</option>
                        <option value="1986">1986</option>
                        <option value="1987">1987</option>
                        <option value="1988">1988</option>
                        <option value="1989">1989</option>
                        <option value="1990">1990</option>
                        <option value="1991">1991</option>
                        <option value="1992">1992</option>
                        <option value="1993">1993</option>
                        <option value="1994">1994</option>
                        <option value="1995">1995</option>
                        <option value="1996">1996</option>
                        <option value="1997">1997</option>
                        <option value="1998">1998</option>
                        <option value="1999">1999</option>
                        <option value="2000">2000</option>
                        <option value="2001">2001</option>
                        <option value="2002">2002</option>
                        <option value="2003">2003</option>
                        <option value="2004">2004</option>
                        <option value="2005">2005</option>
                        <option value="2006">2006</option>
                        <option value="2007">2007</option>
                        <option value="2008">2008</option>
                        <option value="2009">2009</option>
                        <option value="2010">2010</option>
                        <option value="2011">2011</option>
                        <option value="2012">2012</option>
                        <option value="2013">2013</option>
                        <option value="2014">2014</option>
                        <option value="2015">2015</option>
                        <option value="2016">2016</option>
                        <option value="2017">2017</option>
                        <option value="2018">2018</option>
                        <option value="2019">2019</option>
                        <option value="2020">2020</option>
                        <option value="2021">2021</option>
                        <option value="2022">2022</option>
                    </select>
                </div>
            </div>
        </div>
        <button id='get-experience' class="save save-btn-experienta close-btn blue-btn">Salvează</button>
    </div>
</div>

<?php require_once "design/footer.php"; ?>
<script>

$(document).ready(function(){
    $("#get-study").click(function () {
        $("#result-institutie").html(
            $("#numele-institutie").val()
        );
        $("#result-calificare").html(
            $("#calificare").val()
        );
        $("#result-localitate-tara").html(
            $("#localitate").val() + ", " + $("#tari").val()
        );
        $("#result-date-inceput-sfarsit").html(
            $("#date-inceput").val() + "-" + $("#date-sfarsit").val()
        );
    });
    $("#get-experience").click(function () {
        $("#result-post-ocupat").html(
            $("#post-ocupat").val()
        );
        $("#result-firma-lucrat").html(
            $("#firma-lucrat").val()
        );
        $("#result-localitate-tara-experienta").html(
            $("#localitate-experienta").val() + ", " + $("#tari-experienta").val()
        );
        $("#result-date-inceput-sfarsit-experienta").html(
            $("#luna-inceput-experienta").val() + " " + $("#date-inceput-experienta").val() + " - " +$("#luna-sfarsit-experienta").val() + " " + $("#date-sfarsit-experienta").val()
        );
    });
});

$(document).ready(function() {

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
$(".limba-btn").click(function(){
    // $(".limba-container").css('display', 'flex');
    $(".limba-box-all").append("<div class='limba-container margin20 row relative'><select class='login-input' id='languages' name='languages'><option hidden>Limba</option><option value='RO'>Română</option><option value='EN'>Engleză</option><option value='DE'>Germană</option><option value='AF'>Afrikaans</option><option value='SQ'>Albaneză</option><option value='AR'>Arabă</option><option value='HY'>Armeană</option><option value='EU'>Bască</option><option value='BN'>Bengali</option><option value='BG'>Bulgară</option><option value='CA'>Catalană</option><option value='KM'>Cambodgian</option><option value='ZH'>Chineză (Mandarină)</option><option value='HR'>Croată</option><option value='CS'>Cehă</option><option value='DA'>Daneză</option><option value='NL'>Olandeză</option><option value='ET'>Estonă</option><option value='FJ'>Fiji</option><option value='FI'>Finlandeză</option><option value='FR'>Franceză</option><option value='KA'>Georgian</option><option value='EL'>Greacă</option><option value='GU'>Gujarati</option><option value='HE'>Ebraică</option><option value='HI'>Hindi</option><option value='HU'>Maghiară</option><option value='IS'>Islandeză</option><option value='ID'>Indoneziană</option><option value='GA'>Irlandeză</option><option value='IT'>Italiană</option><option value='JA'>Japonez</option><option value='JW'>Javanese</option><option value='KO'>Coreeană</option><option value='LA'>Latină</option><option value='LV'>Letonă</option><option value='LT'>Lituaniană</option><option value='MK'>Macedoneană</option><option value='MS'>Malay</option><option value='ML'>Malayalam</option><option value='MT'>Malteză</option><option value='MI'>Maori</option><option value='MR'>Marathi</option><option value='MN'>Mongolă</option><option value='NE'>Nepaleză</option><option value='NO'>Norvegiană</option><option value='FA'>Persană</option><option value='PL'>Poloneză</option><option value='PT'>Portugheză</option><option value='PA'>Punjabi</option><option value='QU'>Quechua</option><option value='RU'>Rusă</option><option value='SM'>Samoan</option><option value='SR'>Sârbă</option><option value='SK'>Slovacă</option><option value='SL'>Slovenă</option><option value='ES'>Spaniolă</option><option value='SW'>Swahili</option><option value='SV'>Suedeză</option><option value='TA'>Tamil</option><option value='TT'>Tătar</option><option value='TE'>Telugu</option><option value='TH'>Thai</option><option value='BO'>Tibetană</option><option value='TO'>Tonga</option><option value='TR'>Turcă</option><option value='UK'>Ucraineană</option><option value='UR'>Urdu</option><option value='UZ'>Uzbek</option><option value='VI'>Vietnameză</option><option value='CY'>Galeză</option><option value='XH'>Xhosa</option></select><select class='login-input' id='nivel' name='nivel'><option hidden>Nivel</option><option value='incepator'>Începător</option><option value='mediu'>Mediu</option><option value='avansat'>Avansat</option></select><img class='remove-icon remove-btn pointer' src='./static/content/icons/x.svg' alt='remove-icon' class='icons'></div>");
    $(".remove-btn").click(function(){
    // $(".limba-container").css('display', 'none');
    $(this).parents('.limba-container').remove();
    });
});
});
$(document).ready(
    function(){
        $('#button').click(
            function(){
                const toAdd = $('.input-hobby').val();
                 $('.hobby-list').append("<div class='hobby-box row margin20'><li class='hobby-text description blue-color'>" + toAdd + "</li><img class='remove-hobby pointer' src='./static/content/icons/cross-circle.svg' alt='remove-icon' class='icons'></div>");
                //  $('.').
                $(".remove-hobby").click(function(){
                // $(".limba-container").css('display', 'none');
                $(this).parents('.hobby-box').remove();
                });
            });
        $('#input-hobby').focus(function() {
            $(this).val('');
        });
    }
    
);
$(document).ready(function() {
    
    $(".close-btn").click(function(){
        $(this).parents(".section").removeClass("show");
    })

    $(".delete-study").click(function(){
        $('.result-study').css('display', 'none');
    })

    $(".save-btn").click(function(){
        $('.result-study').css('display', 'flex');
    })

    $(".save-btn-experienta").click(function(){
        $('.result-experienta').css('display', 'flex');
    })

    $(".delete-experienta").click(function(){
        $('.result-experienta').css('display', 'none');
    })
    
    $(".continue-btn").click(function(){
        $(".first").hide();
        $(".second").css('display', 'flex');
    })

    $(".back-first").click(function(){
        $(".second").hide();
        $(".first").css('display', 'flex');
    })

    $(".continue-btn-third").click(function(){
        $(".second").hide();
        $(".third").css('display', 'flex');
    })

    $(".back-second").click(function(){
        $(".third").hide();
        $(".second").css('display', 'flex');
    })
    
    $(".study-btn").click(function(){
        $(".popup.studii").addClass("show");
    })

    $(".experienta-btn").click(function(){
        $(".popup.experience").addClass("show");
    })

    $(".limba-btn").click(function(){
        // $(".limba-container").css('display', 'flex');
        $(".limba-box-all").append("<div class='limba-container margin20 row relative'><select class='login-input' id='languages' name='languages'><option hidden>Limba</option><option value='RO'>Română</option><option value='EN'>Engleză</option><option value='DE'>Germană</option><option value='AF'>Afrikaans</option><option value='SQ'>Albaneză</option><option value='AR'>Arabă</option><option value='HY'>Armeană</option><option value='EU'>Bască</option><option value='BN'>Bengali</option><option value='BG'>Bulgară</option><option value='CA'>Catalană</option><option value='KM'>Cambodgian</option><option value='ZH'>Chineză (Mandarină)</option><option value='HR'>Croată</option><option value='CS'>Cehă</option><option value='DA'>Daneză</option><option value='NL'>Olandeză</option><option value='ET'>Estonă</option><option value='FJ'>Fiji</option><option value='FI'>Finlandeză</option><option value='FR'>Franceză</option><option value='KA'>Georgian</option><option value='EL'>Greacă</option><option value='GU'>Gujarati</option><option value='HE'>Ebraică</option><option value='HI'>Hindi</option><option value='HU'>Maghiară</option><option value='IS'>Islandeză</option><option value='ID'>Indoneziană</option><option value='GA'>Irlandeză</option><option value='IT'>Italiană</option><option value='JA'>Japonez</option><option value='JW'>Javanese</option><option value='KO'>Coreeană</option><option value='LA'>Latină</option><option value='LV'>Letonă</option><option value='LT'>Lituaniană</option><option value='MK'>Macedoneană</option><option value='MS'>Malay</option><option value='ML'>Malayalam</option><option value='MT'>Malteză</option><option value='MI'>Maori</option><option value='MR'>Marathi</option><option value='MN'>Mongolă</option><option value='NE'>Nepaleză</option><option value='NO'>Norvegiană</option><option value='FA'>Persană</option><option value='PL'>Poloneză</option><option value='PT'>Portugheză</option><option value='PA'>Punjabi</option><option value='QU'>Quechua</option><option value='RU'>Rusă</option><option value='SM'>Samoan</option><option value='SR'>Sârbă</option><option value='SK'>Slovacă</option><option value='SL'>Slovenă</option><option value='ES'>Spaniolă</option><option value='SW'>Swahili</option><option value='SV'>Suedeză</option><option value='TA'>Tamil</option><option value='TT'>Tătar</option><option value='TE'>Telugu</option><option value='TH'>Thai</option><option value='BO'>Tibetană</option><option value='TO'>Tonga</option><option value='TR'>Turcă</option><option value='UK'>Ucraineană</option><option value='UR'>Urdu</option><option value='UZ'>Uzbek</option><option value='VI'>Vietnameză</option><option value='CY'>Galeză</option><option value='XH'>Xhosa</option></select><select class='login-input' id='nivel' name='nivel'><option hidden>Nivel</option><option value='incepator'>Începător</option><option value='mediu'>Mediu</option><option value='avansat'>Avansat</option></select><img class='remove-icon remove-btn pointer' src='./static/content/icons/x.svg' alt='remove-icon' class='icons'></div>");
        $(".remove-btn").click(function(){
        // $(".limba-container").css('display', 'none');
        $(this).parents('.limba-container').remove();
        });
    });
    
});
</script>
</body>
</html>
