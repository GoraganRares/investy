<?php 

$dbServername = "localhost"; 
$dbUsername = "sitemoon_mytodo";
$dbPassword = "~AXK2ZU2rI6j";
$dbName = "sitemoon_investy";

// $dbServername = "localhost"; 
// $dbUsername = "root";
// $dbPassword = "";
// $dbName = "investy";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

if (!$conn) {
    die("Connection faild: ".mysqli_connect_error());
}

