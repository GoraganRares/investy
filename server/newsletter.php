<?php

use PHPMailer\PHPMailer\PHPMailer;

require_once "db.php";

$email = $_POST['email'];

if ( empty($email) ) exit("Toate campurile sunt obligatorii");

$sql = "SELECT * FROM newsletter WHERE email='$email'";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);
$row = mysqli_fetch_assoc($result);

if ($resultCheck == 0) {

    $sql = "INSERT INTO newsletter ( email) VALUE ('$email')";
    $result = mysqli_query($conn, $sql);

    if ( !$result ) exit ("A aparut o problema. Te rugam sa incerci iar");

}else {
    
    setCookie("newsletter", "true", time() + (86400 * 30), "/");
    exit ("Esti deja abonat la newsletter");

}

echo "Te-ai abonat cu success la newsletter";
setCookie("newsletter", "true", time() + (86400 * 30), "/");