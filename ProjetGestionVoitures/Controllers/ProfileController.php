<?php 

require_once("Controllers/inscriptionverif.php");
require_once("Models/userModel.php");
$uri = $_SERVER["REQUEST_URI"];
if ($uri === "/connexion"){
    if(isset($_POST['btnEnvoi'])){
        $erreur=false;
        if(connectUser($pdo)){
            header("location:/");
        }
        else{
            $erreur=true;
        }
    }
    $title = "Connexion";
    $template = "Views/Users/connexion.php";
    require_once("Views/base.php");
}
elseif ($uri ==="/updateProfil"){
    if (isset($_POST['btnEnvoi'])) {
        $messageError = verifEmptyData();
        if (!$messageError) {
            updateUser($pdo);
            updateSession($pdo);
            header("location:/profil");
        }
    }
    $title = "Mise à jour du profil";
    $template = "Views/Users/inscriptionOrEditProfile.php";
    require_once("Views/base.php");
}

elseif ($uri === "/deconnexion"){
    session_destroy();
    header("location:/");
}

elseif ($uri ==="/inscription"){
    if(isset($_POST['btnEnvoi'])){
        $messageError = verifEmptyData();
        if(!$messageError){
            var_dump("cc");
            createUser($pdo);
            header('location:/connexion');
        }
    }
    $title = "Inscription";
    $template = "Views/Users/inscriptionOrEditProfil.php";
    require_once("Views/base.php");
}


elseif ($uri === "/deleteProfil") {
    deleteOptionsSchoolFromUser($pdo);
    deleteAllSchoolsFromUser($pdo);
    deleteUser($pdo);
    header('location:/deconnexion');
}

?>