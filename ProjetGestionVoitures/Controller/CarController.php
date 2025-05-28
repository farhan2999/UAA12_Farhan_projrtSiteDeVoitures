<?php

require_once "Models/Car.php";

$uri = $_SERVER['REQUEST_URI'];

if ($uri === "/myCars") {
    $car = selectMyCars($pdo);
    $title = "Mes voitures";
    $template = "Views/pageAcceuil.php";
    require_once("Views/base.php");
} elseif ($uri === "/createCar") {

    if (isset($_POST['btn'])) {
        createCar($pdo);
        $carId = $pdo->lastInsertId();
        for ($i = 0; $i < count($_POST["options"]); $i++) {
            $optionScolaireId = $_POST["options"][$i];
            ajouterOptionCars($pdo, $tyVoiID, $tyVoi);
        }
        header("locations:/myCars");
    }
    $tyVois = selectAllOptions($pdo);
    $tymotors = selectAllMotor($pdo);
    $title = "Ajout d'une voiture";
    $template = "Views/Cars/editOrCreateCar.php";
    require_once("Views/base.php");
} elseif (isset($_POST['tyVoiID']) && $uri === "/voitCar?tyVoiID" . $_GET["tyVoiID"]) {
    $car = $pdo->selectOneCar($pdo);
    $options = selectAllOptions($pdo);
    $title = "Ajout d'une voiture";
    $template = "voitCar.php";
    require_once("Views/base.php");
} elseif (isset($_GET["carId"]) && $uri == "/updateCar?carId=" . $_GET["carId"])
 {

    if (isset($_POST['btn'])) {
        updateCar($pdo);
        deleteOptionsCar($pdo);
        for ($i = 0; $i < count($_POST['options']); $i++) {
            $optionCarId = $_POST['options'][$i];
            ajouterOptionCars($pdo, $_GET["carlId"], $optionCarId);
        }
        header("location:/myCars");
    }
    // rechercher les données de l'école concernée ainsi que les options correspondantes
    $car = selectOneCar($pdo);
    $optionsActiveSchool = selectOptionsActiveCars($pdo);
    $options = selectAllOptions($pdo);
    $title = "Mise à jour d'une voiture";    // titre à afficher dans l'onglet de la page du navigateur
    $template = "Views/Cars/editOrCreateCar.php";    // chemin vers la vue demandée
    require_once("Views/base.php");    // appel de la page de base qui sera remplie avec la vue demandée

}

elseif (isset($_GET["tyVoiID"]) && $uri === "/deleteCar?tyVoiID=" . $_GET["tyVoiID"]) {
        deleteOptionsCar($pdo);  
        $deleted = deleteOneCar($pdo);
            header("location:/myCars");
}