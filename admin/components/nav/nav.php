<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<link rel="stylesheet" href="components/nav/nav.css">
<script src="components/nav/nav.js"></script>
<nav>

    <div class="logo_box">

        <img src="img/Logo W.png" alt="Investy">

    </div>

    <h3 href="dashboard.php"> <?php require "img/icons/home.svg" ?> Dashboard </h3>
    <h3 href="idei.php"> <?php require "img/icons/document.svg" ?> Idei depuse </h3>
    <h3 href="notificari.php"> <?php require "img/icons/bell-ring.svg" ?> Notificări </h3>
    <h3 href="investitori.php"> <?php require "img/icons/world.svg" ?> Investitori </h3>
    <h3 href="statistici.php"> <?php require "img/icons/placinta.svg" ?> Statistici </h3>
    <h3 href="setari.php"> <?php require "img/icons/settings.svg" ?> Setări cont </h3>

    <a href="#" id="delogare"> Delogare <?php require "img/icons/sign-out.svg" ?> </a>
    
</nav>

<div id="share_list">

    <div class="wrapper">
        <div class="header">

            <h3>Trimite ideea unui investitor
                <span><img src="img/icons/cross.png"></span>
            </h3>

        </div>

        <?php

        require "server/obiecte/autoloader.php";

        $investitori = new Investitori;

        $investitori->get_popup_investors();

        ?>

        <div id="trimite-idee">Trimite</div>

    </div>

</div>