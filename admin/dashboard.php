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

    <link rel="stylesheet" href="css/dashboard.css">
</head>
<body>
    
    <?php require "components/nav/nav.php"?>

    <div id="wrapper">

        <div class="tabel_idei tabel">

            <div class="header">

                <h3>Idei depuse</h3>

                <a href="idei.php">vezi toate ideile depuse <img src="img/icons/arrow-small-left.png" alt="Investy"> </a>

            </div>

            <?php


            $idei = new Idei;

            $idei->get_five_ideas();

            ?>

        </div>

        <div class="tabel_investitori tabel">

            <div class="header">

                <h3>Investitori</h3>

                <a href="investitori.php">vezi toți investitorii <img src="img/icons/arrow-small-left.png" alt="Investy"> </a>

            </div>

            <?php

            $investitori = new Investitori;

            $investitori->get_five_investors();

            ?>


        </div>

        <div class="tabel_notificari tabel">

            <div class="header">

                <h3>Notificări</h3>

                <a href="notificari.php">vezi toate notificările <img src="img/icons/arrow-small-left.png" alt="Investy"> </a>

            </div>

            <?php

            $notificari = new Notificari;

            $notificari->get_four_notificacion();

            ?>

        </div>

        <div class="tabel_statistici tabel">

            <div class="header">

                <h3>Statistici</h3>

                <a href="investitori.php">vezi toate statisticile <img src="img/icons/arrow-small-left.png" alt="Investy"> </a>

            </div>

            <div class="row">

                <div class="name">București</div>
                <div class="stats">73,4%</div>

            </div>
            <div class="row">

                <div class="name">Constanța</div>
                <div class="stats">18,2%</div>

            </div>
            <div class="row">

                <div class="name">Cluj</div>
                <div class="stats">6,3%</div>

            </div>
            <div class="row">

                <div class="name">Timișoara</div>
                <div class="stats">2,1%</div>

            </div>

        </div>
    </div>


</body>
</html>