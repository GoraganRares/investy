<?php

if ( !isset($_COOKIE['user']) ) {

    header('Location: index.php');

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <link rel="stylesheet" href="css/profil.css">

</head>
<body>
    
    <?php require "components/nav/nav.php"?>

    <div id="wrapper">

        <div class="tabel_profil tabel">

            <div class="header">

                <div>
                    <div class="green_btn"> <img src="img/icons/arrow-left.png"> </div>

                    <div>Manea Victor</div>
                </div>

            </div>

            <div class="row">

                <div class="left">

                    <h4>Date de contact</h4>

                    <h3 class="input">0728 541 017</h3>
                    <h3 class="input">Dâmbovița</h3>
                    <h3 class="input">Târgoviște</h3>
                    <h3 class="textarea">Bd-ul Victoriei, nr.3, bloc O3, scara B, Apartament 36</h3>

                    <h4>Limbile vorbite</h4>

                    <h3 class="input limbi">Engleză</h3>
                    <h3 class="input limbi">Avansat</h3>

                    <h4>Hobby-uri</h4>

                    <h3 class="hobby">Mersul pe jos</h3>
                    <h3 class="hobby">Sportul</h3>
                    
                    <h4>Studii</h4>

                    <h3 class="textarea">

                        Colegiul Național Gheorghe Lazăr <br>
                        <span>Matematică-Informatică</span>
                        <span>București, România</span>
                        <span>2010-2014</span>

                    </h3>

                    <h4>Experiența profesională</h4>

                    <h3 class="textarea">

                        Director vânzări <br>
                        <span>MTK Consult</span>
                        <span>București, România</span>
                        <span>Februarie 2020 - Martie 2022</span>

                    </h3>
                </div>

                <div class="right">

                    <div class="avatar">

                        <img src="img/pexels-daniel-xavier-1121796@2x.png">

                    </div>

                </div>

            </div>

        </div>

    </div>

</body>
</html>