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

}
