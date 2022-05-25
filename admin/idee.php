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

    <link rel="stylesheet" href="css/idee.css">

</head>
<body>
    
    <?php require "components/nav/nav.php"?>

    <?php

    $idei = new Idei;

    $data = $idei->get_idea($_GET['id']);

    ?>

    <div id="wrapper">

        <div class="tabel_idee tabel">

            <div class="header">

                <div class="green_btn"> <img src="img/icons/arrow-left.png"> </div>

                <div><?php echo $data['idei']['titlu'] ?></div>

                <div> <?php echo date("d/m/Y", strtotime($data['idei']['creat'])) ?> </div>

                <div>Manea Victor</div>

                <a href="profil.php">vezi profilul <img src="img/icons/arrow-small-left.png" alt="Investy"> </a>

                <div>
                    <div class="green_btn"> <img src="img/icons/verify.png"> </div>
                    
                    <div class="blue_btn"> <img src="img/icons/share.png" alt="Investy"> </div>
                </div>

            </div>

            <div class="row">

                <h3>Care este suma de care ai nevoie? ( în euro )</h3>

                <p><?php echo $data['idei_full']['suma'] ?>€</p>

            </div>
            <div class="row">

                <h3>În ce vor fi investiți banii? ( max. 300 caractere )</h3>

                <p><?php echo $data['idei_full']['investitii'] ?></p>

            </div>
            <div class="row">

                <h3>Care sunt activitățile cheie?</h3>

                <p><?php echo $data['idei_full']['activitati_cheie'] ?></p>

            </div>
            <div class="row">

                <h3>Cine sunt partenerii afacerii?</h3>

                <p><?php echo $data['idei_full']['parteneri'] ?></p>

            </div>
            <div class="row">

                <h3>Care sunt resursele necesare?</h3>

                <p><?php echo $data['idei_full']['resurse_necesare'] ?></p>

            </div>
            <div class="row">

                <h3>Care sunt canalele de vânzare potrivite?</h3>

                <p><?php echo $data['idei_full']['canale_vanzari'] ?></p>

            </div>
            <div class="row">

                <h3>Adaugă structura costurilore necesare?</h3>

                <p><?php echo $data['idei_full']['structura_costuri'] ?></p>

            </div>
            <div class="row">

                <h3>Adaugă structura vânzărilor</h3>

                <p><?php echo $data['idei_full']['structura_vanzari'] ?></p>

            </div>

            <div id="status">

                <div class="btn yes">INVESTESC</div>
                <div class="btn no">MĂ RETRAG</div>

            </div>

        </div>

    </div>

</body>
</html>