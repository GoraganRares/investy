<?php

if ( isset($_COOKIE['user']) ) {

    header('Location: dashboard.php');

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" ></script>
    <script src="js/login.js"></script>
    <link rel="stylesheet" href="css/login.css">

</head>
<body>

    <div id="login_box">

        <div class="logo_box">

            <img src="img/Logo.png" alt="Investy">

        </div>

        <input type="text" name='email' placeholder="Email*">
        
        <input type="password" name='password' placeholder="Password*">

        <a href="#" id="recupereaza">Am uitat parola</a>

        <a href="#" id="login">Login</a>

    </div>

</body>
</html>