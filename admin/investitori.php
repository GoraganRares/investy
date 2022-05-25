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

    <link rel="stylesheet" href="css/investitori.css">
</head>
<body>
    
    <?php require "components/nav/nav.php"?>

    <div id="wrapper">

        <div class="tabel_notificari tabel">

            <div class="header">

                <h3>Investitori </h3>

            </div>

            <!-- <div class="row">

                <div class="avatar">
                    <img src="img/pexels-mikhail-nilov-8350292.png">
                </div>
                <div>Ahmed Samal</div>
                <div><img src="img/icons/location.svg"> UAE</div>
                <div>Idei trimise: 7</div>
                <div>
                    <div class="blue_btn"> <img src="img/icons/paper-plane.png" alt="Investy"> </div>
                </div>
            </div>
            <div class="row">

                <div class="avatar">
                    <img src="img/pexels-mikhail-nilov-8350292.png">
                </div>
                <div>Ahmed Samal</div>
                <div><img src="img/icons/location.svg"> UAE</div>
                <div>Idei trimise: 7</div>
                <div>
                    <div class="blue_btn"> <img src="img/icons/paper-plane.png" alt="Investy"> </div>
                </div>
            </div>
            <div class="row">

                <div class="avatar">
                    <img src="img/pexels-mikhail-nilov-8350292.png">
                </div>
                <div>Dragoș Anastasiu</div>
                <div><img src="img/icons/location.svg"> România</div>
                <div>Idei trimise: 5</div>
                <div>
                    <div class="blue_btn"> <img src="img/icons/paper-plane.png" alt="Investy"> </div>
                </div>
            </div>
            <div class="row">

                <div class="avatar">
                    <img src="img/pexels-mikhail-nilov-8350292.png">
                </div>
                <div>Ahmed Samal</div>
                <div><img src="img/icons/location.svg"> UAE</div>
                <div>Idei trimise: 7</div>
                <div>
                    <div class="blue_btn"> <img src="img/icons/paper-plane.png" alt="Investy"> </div>
                </div>
            </div> -->

            <?php

            $investitori = new Investitori;

            $investitori->get_all_investors();

            ?>

        </div>

    </div>

</body>
</html>