<?php

    require_once("Models\TypeCar.php");

    $uri = $_SERVER["REQUEST_URI"];

    if ($uri === "/index.php" || $uri === "/") {
        $mod = selectAllMods($pdo);
        $title = "Page d'acceuil";
        $template = "Views\pageAcceuil.php";
        require_once("Views/base.php");
    }