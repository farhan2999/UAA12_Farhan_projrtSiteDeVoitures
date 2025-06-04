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
        $carId = $pdo->lastInsertID();
      
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
} elseif (isset($_GET["carId"]) && $uri == "/updateCar?carId=" . $_GET["carId"]) {

    if (isset($_POST['btn'])) {
        updateCar($pdo);
        deleteOptionsCar($pdo);
        header("location:/myCars");
    }
    // rechercher les données de l'école concernée ainsi que les options correspondantes
    $car = selectOneCar($pdo);
    //$optionsActiveSchool = selectOptionsActiveCars($pdo);
    $options = selectAllOptions($pdo);
    $title = "Mise à jour d'une voiture";    // titre à afficher dans l'onglet de la page du navigateur
    $template = "Views/Cars/editOrCreateCar.php";    // chemin vers la vue demandée
    require_once("Views/base.php");    // appel de la page de base qui sera remplie avec la vue demandée

} elseif (isset($_GET["carId"]) && $uri === "/deleteCar?carId=" . $_GET["carId"]) {
    deleteOptionsCar($pdo); // Optional step if options are linked to the car
    $deleted = deleteOneCar($pdo);
    header("Location:/myCars");
}
