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

/*/ function deleteOptionsCarFromUser($pdo)
{
    try {
        $query = 'delete from utilisateur where utilID = :utilID';
        $selectUser = $pdo->prepare($query);
        $selectUser->execute([
            'utilID' => $_SESSION['user']->utilID
        ]);
        $user = $selectUser->fetch();
        $_SESSION['user'] = $user;
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}
/*/
function deleteAllFromUser($pdo)
{
    try {
        $query = 'delete from utilisateur where utilID = :utilID';
        $selectUser = $pdo->prepare($query);
        $selectUser->execute([
            'utilID' => $_SESSION['user']->utilID
        ]);
        $user = $selectUser->fetch();
        $_SESSION['user'] = $user;
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}



