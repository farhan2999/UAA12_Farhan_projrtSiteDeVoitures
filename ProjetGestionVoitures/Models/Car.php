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
        $query = 'SELECT * FROM voiture WHERE utilID = :utilID';

        $selectCar = $pdo->prepare($query);

        $selectCar->execute([


        'utilID' => $_SESSION["user"]->utilID

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

function selectAllMotor ($pdo){
    try {
        $query = 'SELECT * FROM type_motorisation';
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


function createCar($pdo)
{
    try {
        $query = 'INSERT INTO voiture (voitNom, voitPrix, tyVoiID, voitImage, voitLien_achat, motorID, utilID)
        VALUES (:voitNom, :voitPrix, :tyVoiID, :voitImage, :voitLien_achat, :motorID, :utilID)';
        $addCar = $pdo->prepare($query);
        $addCar->execute([
        'voitNom' => $_POST["name_car"],
        'voitPrix' => $_POST["le_prix"],
        'tyVoiID' => $_POST["type_voiture"],
        'motorID' => $_POST['type_moto'],
        'voitImage' => $_POST["image"],
        'voitLien_achat' => $_POST["Lien_Achat"],
        'utilID' => $_SESSION["user"]->utilID
        ]);

    } catch (PDOException $e) {
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
                'voitID' => $_GET["carId"]
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

function updateCar($pdo)
{
    try {
        $query = 'UPDATE voiture SET voitNom = :voitNom,motorID = :motorID, voitPrix = :voitPrix, voitID = :voitID,
                 voitImage = :voitImage, voitLien_achat = :voitLien_achat WHERE voitID = :voitID';
        $updateCar = $pdo->prepare($query);
        $updateCar->execute([
            'voitNom' => $_POST['name_car'],
            'voitPrix' => $_POST["le_prix"],
            'tyVoiID' => $_POST["type_voiture"],
            'motorID' => $_POST['type_moto'],
            'voitImage' => $_POST["image"],
            'voitLien_achat' => $_POST["Lien_Achat"],
            'utilID' => $_GET["utilID"] ,

        ]);
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}


function deleteOptionsCar($dbh)
{
    try {
        $query = 'DELETE FROM type_voiture WHERE tyVoiID = :tyVoiID';
        $deleteAllCar = $dbh->prepare($query);
        $deleteAllCar->execute([
            'tyVoiID' => $_GET["tyVoiID"]   
        ]);
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}


function deleteOneCar($pdo)
{
    try {
        $query = 'DELETE FROM voiture WHERE voitID = :voitID';
        $deleteCarStatement = $pdo->prepare($query);
        $deleteCarStatement->execute([
            'voitID' => $_GET["carId"]
        ]);
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}




