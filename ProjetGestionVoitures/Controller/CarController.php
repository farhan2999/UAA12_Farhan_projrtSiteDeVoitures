<?php

require_once "Models/Car.php";

$uri = $_SERVER['REQUEST_URI'];

if($uri === "/myCars") {
    $car = selectAllCars($pdo);
    $title = "Mes voitures";
    $template = "Views/pageAccueil.php";
    require_once("Views/base.php");
}

elseif ($uri === "/createCar"){
   
    if (isset($_POST['btnEnvo1'])) {
        createCars($pdo);
    
        $carId = $pdo->lastInsertId();
        for ($i = 0; $i < count($_POST["options"]); $i++) {
            $optionScolaireId = $_POST["options"][$i];
            ajouterOptionCars($pdo,$tyVoiID,$tyVoi);
        }
        header("locations:/MyCars");
        
    }
    $options = selectAllOptions($pdo);
    $title = "Ajout d'une voiture";    
    $template = "Views/Cars/editOrCreateCar.php";    
    require_once("Views/base.php");    
}

elseif (isset($_POST['tyVoiID']) && $uri === "/voitCar?tyVoiID" . $_GET["tyVoiID"]){
    $car = $pdo->selectOneCar($pdo);
    $options = selectAllOptions($pdo);
    $title = "Ajout d'une voiture";    
    $template = "Views/Cars/voitCar.php";    
    require_once("Views/base.php");    
}
