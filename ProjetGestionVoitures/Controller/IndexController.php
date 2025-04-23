<?php

    require_once("Models\Car.php");

    $uri = $_SERVER["REQUEST_URI"];

    if ($uri === "/index.php" || $uri === "/") {
        $car = selectAllCars($pdo);
        $title = "Page d'acceuil";
        $template = "Views\pageAcceuil.php";
        require_once("Views/base.php");
    }