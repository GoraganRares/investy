<?php

require_once "autoloader.php";

$action = $_POST['action'];

$account = new Accounts;

if ($action == "login") {

    echo $account->login($_POST['email'], $_POST['psw']);

}

if ($action == "register") {

    echo $account->register($_POST['rol'], $_POST['email'], $_POST['psw'], $_POST['re_psw']);

}

if ($action == "change") {

    echo $account->change($_POST['psw'], $_POST['email'] , $_COOKIE['user']);

}

if ( $action == "register_client" ) {

    echo $account->register_client($_POST['username'], $_POST['nume'], $_POST['email'], "", $_POST['psw'], $_POST['re_psw']);
}

if ( $action == "updete_profile" ) {

    echo $account->update_profil ($_POST['oras'], $_POST['judet'], $_POST['adresa'], $_POST['limbi'], $_POST['hoby'], $_POST['studii'], $_POST['experienta']);

}