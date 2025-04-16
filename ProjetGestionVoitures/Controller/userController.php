<?php

require_once("Models/User.php");
$uri = $_SERVER["REQUEST_URI"];


if ($uri === "/connexion") {
    if (isset($_POST['btn'])) {
        // pour récupérer l'erreur si l'utilisateur fait une faute de frappe au se trompe ses identifiants
        $erreur = false;
        //tentative de connexion et réupération des donnée de l'utilisateur ouverture d'une session
        if (connectUser($pdo)) {
            //redirection vers la page d'accueil
            header("location:/");
        } else {
            //cas d'erreur
            $erreur = true;
        }
    }
    $title = "Connexion";
    $template = "Views/Users/connexion.php";
    require_once("Views/base.php");
} elseif ($uri === "/deconnexion") {
    session_destroy();
    header("location:/");
} elseif ($uri === "/inscription") {
    if (isset($_POST['btn'])) {
        $messageError = verifEmptyData();
        if (!$messageError) {
            //ajout de l'utilisateur à la base de données
            createUser($pdo);
            // redirection vers la page de connexion
            header('location:/connexion');
        }
    }
    $title = "Inscription";
    $template = "Views/Users/inscription.php";
    require_once("Views/base.php");
}

elseif ($uri === "/updateProfil") {
    if (isset($_POST['btn'])) {
        $messageError = verifEmptyData();
        if (!$messageError) {
            //ajout de l'utilisateur à la base de données
            updateUser($pdo);
            updateSession($pdo);
            // redirection vers la page de connexion
            header('location:/');
        }
    }
    $title = "Inscription";
    $template = "Views/Users/inscription.php";
    require_once("Views/base.php");
}
function verifEmptyData(){
    foreach($_POST as $key => $value){
        if(empty(str_replace('','', $value))){
            $messageError[$key] = "Votre " . $key . " est vide.";
        }
    }
    if(isset($messageError)){
        return $messageError;
    }
    else {
        return false;
    }
}