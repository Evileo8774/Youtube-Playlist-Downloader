<?php

function mainController($action){
    $actions = array();
    $actions["default"] = "home.php";
    $actions["login"] = "authentification.php";
    $actions["historique"] = "historique.php";
    $actions["panel"] = "panel.php";
    $actions["alerte"] = "alert.php";
    $actions["stock"] = "stock.php";
    $actions["affectation"] = "affaireAffectee.php";
    $actions["affaire"] = "affaire.php";
    $actions["manuel"] = "manuel.php";
    $actions["logout"] = "logout.php";
    $actions["classe"] = "classe.php";
    $actions["vehicule"] = "vehicule.php";

    if (array_key_exists($action, $actions)){
        return $actions[$action];
    } else {
        return $actions["default"];
    }
}

?>