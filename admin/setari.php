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

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js/setari.js"></script>
    <link rel="stylesheet" href="css/setari.css">   
</head>
<body>
    
    <?php require "components/nav/nav.php"?>

    <div id="wrapper">

        <div class="setari">

            <h2>Editează datele contului tău</h2>

            <input type="text" name="email" placeholder="Adresa de Email">
            <input type="password" name="psw" placeholder="Parola">
            <input type="password" name="repsw" placeholder="Repeta parola">

            <div id="salveza">Salvează</div>

        </div>

    </div>

</body>
</html>