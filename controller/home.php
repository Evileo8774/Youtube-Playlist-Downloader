<?php

if(!isset($_SESSION)){
    session_start();
}

if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    $root="..";
}

$title = $prefix."Accueil";
include "$root/view/header.html.php";
include "$root/view/viewHome.php";
include "$root/view/footer.html.php";

?>