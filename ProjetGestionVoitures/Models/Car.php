<?php
 
function  selectAllCars($pdo){
    try {
        $query = 'select * from voiture';
        $selectCar = $pdo->prepare($query);
        $selectCar->execute();
        $car = $selectCar->fetchAll();
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

function selectMyCars($pdo){
    try {
        $query = 'select * from voiture where voitID = : voitID';

        $selectCar = $pdo->prepare($query);

        $selectCar->execute([


        'userId' => $_SESSION["user"]->id

        ]);
        $car = $selectCar->fetchAll();
        return $car;
        } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
        }
}


function selectAllOptions ($pdo){
try {
    $query = 'SELECT * FROM type_voiture';
    $selectOptions = $pdo->prepare($query);
    $selectOptions->execute();
    $options = $selectOptions->fetchAll();
    return $options;
    }
    catch (PDOException $e) {
    $message = $e->getMessage();
    die($message);
}
}

/*

CreateSchool Function

PURPOSE: Add the user-encoded school data to the school table

IN: $pdo containing all the connection information

*/

function createCars($pdo)
{
    try {
        $query = 'insert into voiture (voitNom, voitPrix, tyVoiID, voitImage, voitLien_achat, utilID)
        values ​​(:voitNom, voitPrix, tyVoiID, voitImage, voitLien_achat,  utilID)';
        $addCar = $pdo->prepare($query);
        $addCar->execute([
            'voitNom' => $_POST["name car"],
            'voitPrix' => $_POST["address"],
            'tyVoiID' => $_POST["city"],
            'voitImage' => $_POST["code_postal"],
            'voitLien_achat' => $_POST["numero_telephone"],
            'utilID' => $_SESSION["user"]->utilID
        ]);

    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);

    }
}

function ajouterOptionCars ($pdo,$tyVoiID,$tyVoi){
    try {
        $query = 'insert into type_voiture( tyVoiID , tyVoi ) values(:tyVoiID , tyVoi)';
        $deleteAllFromUser = $pdo->prepare($query);
        $deleteAllFromUser->execute([
            'tyVoiID' => $tyVoiID,
            'tyVoi' => $tyVoi
        ]);
    }
        catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}


    function selectOneCar($pdo)
    {
        try {
            $query = 'select * from voiture where utilID = :utilID';
            $selectCar = $pdo->prepare($query);
            $selectCar->execute([
                'utilID' => $_GET["utilID"]
            ]);
            $car = $selectCar->fetch(); 
            return $car;
        } catch (PDOException $e) {
            $message = $e->getMessage();
            die($message);
        }
    }

    function selectOptionsActiveCars($pdo)
    {
    try {
        $query = 'select * from type_voiture where tyVoiID in (select tyVoiID from voiture where tyVoiID =:tyVoiID);';
        $selectOptions = $pdo->prepare($query);
        $selectOptions->execute([
            'tyVoiID' => $_GET["tyVoiID"]
        ]);
        $options = $selectOptions->fetchAll();
        return $options;
        
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
    
}