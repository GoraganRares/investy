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

    <link rel="stylesheet" href="css/idei.css">
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

            $idei->get_all_ideas();

            ?>



        </div>

    </div>

</body>
</html>