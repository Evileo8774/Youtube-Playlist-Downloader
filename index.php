<?php

include "getRoot.php";
include "$root/controller/mainController.php";

if (isset($_GET["action"])){
    $action = $_GET["action"];
} else {
    $action = "default";
}

$file = mainController($action);
$prefix = "YT-PLD | ";

include "$root/controller/$file";

?>