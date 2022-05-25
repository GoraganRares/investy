<?php

require_once "autoloader.php";

$idei = new Idei;

echo $idei->send_idea ($_POST['idee'], $_POST['investitori']);