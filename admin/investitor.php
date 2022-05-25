<?php

if ( !isset($_COOKIE['user']) ) {

    header('Location: index.php');

}

if ( !isset($_GET['vkey']) ) {

    header('Location: dashboard.php');

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

    <?php

    $investitori = new Investitori;

    $data = $investitori->get_investor($_GET['vkey']);

    ?>

    <div id="wrapper">

        <div class="investitor_info">

            <div class="avatar">
                <img src="<?php echo $data['user']['poza'] ?>" alt="">
            </div>

            <div class="name"><?php echo $data['user']['nume'] ?> <br> <img src="img/icons/location.svg" alt="Investy"> <?php echo $data['user']['locatie'] ?> </div>

            <div class="idei_stats"><?php echo "Idei trimise: " . $data['trimise'] ?> <br> <?php echo "Idei refuzate: ". $data['refuzate'] ?> </div>

            <div class="idei_stats"><?php echo "Idei acceptate: " . $data['acceptate'] ?> </div>

        </div>

        <div class="tabel_idei tabel">

            <div class="header">

                <h3>Idei depuse</h3>

                <a href="idei.php">vezi toate ideile depuse <img src="img/icons/arrow-small-left.png" alt="Investy"> </a>

            </div>
            
            <?php

            $idei = new Idei;

            $idei->get_investor_ideas($_GET['vkey']);

            ?>

        </div>

    </div>

</body>
</html>