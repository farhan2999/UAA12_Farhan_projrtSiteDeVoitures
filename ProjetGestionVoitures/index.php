<?php
    session_start();
    var_dump($_SESSION);
    require_once("Config/connectDataBase.php");
    require_once("Controller/indexController.php");
    require_once("Controller/userController.php");
