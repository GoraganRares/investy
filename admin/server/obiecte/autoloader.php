<?php

spl_autoload_register("autoload");

function autoload ($className) {
    
    $path = "../clase/";
    $extension = ".cls.php";
    $fullPath = $path . $className . $extension;

    if (!file_exists($fullPath)) {

        $path = "server/clase/";
        $extension = ".cls.php";
        $fullPath = $path . $className . $extension;

        if (!file_exists($fullPath)) return false;

    }

    include_once($fullPath);

}