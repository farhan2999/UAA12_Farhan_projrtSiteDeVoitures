<?php 

try{
    $strConnexion = "mysql:host=10.10.51.98;dbname=farahan;port=3306" ;
    // $strConnexion = "mysql:host=localhost;dbname=farhan;port=3306" ;
    //$pdo=new PDO($strConnexion,"root","root",[
    $pdo=new PDO($strConnexion,"Farahan","root",[
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
    ]);
} catch (PDOException $e) {
    $message = $e->getMessage();
    die($message);
}

?>