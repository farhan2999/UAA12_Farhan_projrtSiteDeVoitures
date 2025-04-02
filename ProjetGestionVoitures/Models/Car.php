<?php
 
function  selectAllMods($pdo){
    try {
        $query = 'select * from voiture';
        $selectMod = $pdo->prepare($query);
        $selectMod->execute();
        $car = $selectMod->fetchAll();
        return $car;
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}