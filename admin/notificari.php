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

    <link rel="stylesheet" href="css/notificari.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js/notificari.js"></script>
</head>
<body>
    
    <?php require "components/nav/nav.php"?>

    <div id="wrapper">

        <div class="tabel_notificari tabel">

            <div class="header">

                <h3>Notificări</h3>

            </div>
            <?php

            $notificari = new Notificari;

            $notificari->get_all_notificacion();

            ?>


        </div>

    </div>

</body>
</html>