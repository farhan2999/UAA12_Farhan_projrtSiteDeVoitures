<?php
function createUser($pdo)
{
    try {
        //definition de la requêted'insertion en utilisant la notion de paramétre 
        $query = 'insert into utilisateur( utilNom , utilPrenom , utilEmail , utilMot_de_passe , utilPhoto_profil , utilRole)
        values (:utilNom, :utilPrenom, :utilEmail, :utilMot_de_passe, :utilPhoto_profil, :utilRole)';
        //préparation de la requête 
        $ajouteUser = $pdo->prepare($query);
        //exécution en attribuant les valeurs récupérées dans le formulaire aux paramétres
        $ajouteUser->execute([
            'utilNom' => $_POST["lastname"],
            'utilPrenom' => $_POST["firstname"],
            'utilEmail' => $_POST["email"],
            'utilMot_de_passe' => $_POST["password"],
            'utilPhoto_profil' => ['utilPhoto_profil'],
            'utilRole' => 'user'
            ]);   
 
    } catch (PDOEXCEPTION $e) {
        $message = $e->getMessage();
        die($message);  }
}


function connectUser($pdo)
{
    try {
        var_dump($_POST);
        //définition de la requête select en utilisant la notion paramèter
        $query = 'select * from utilisateur where utilEmail = :utilEmail and utilMot_de_passe = :utilMot_de_passe';
        //préparation de la requête 
        $connectUser = $pdo->prepare($query);
        //exécution en attribuant les valeurs récupérées dans le formulaire aux paramétres
        $connectUser->execute([
            'utilEmail' => $_POST["email"],
            'utilMot_de_passe' => $_POST["password"]
        ]);
        //stokage des données trouvées dans la variable $user
        $user = $connectUser->fetch();
        if (!$user){
            return false;
        }
        else{
            //ajout de celle-ci à la variable session
            $_SESSION["user"] = $user;
            return true;
        }
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}

function updateUser($pdo)
{
    try {
        $query = 'update utilisateur set utilNom = :utilNom, utilPrenom = :utilPrenom, utilEmail = :utilEmail, utilMot_de_passe = :utilMot_de_passe, utilPhoto_profil = :utilPhoto_profil where utilID = :utilID';
        $ajouteUser = $pdo->prepare($query);
        $ajouteUser->execute([
            'utilNom' => $_POST['lastname'],
            'utilPrenom'=> $_POST['firstname'],
            'utilEmail' => $_POST['email'],
            'utilMot_de_passe' => $_POST['password'],
            'utilPhoto_profil' => ['utilPhoto_profil'],
            'utilID' => $_SESSION['user']->utilID
        ]);
    } catch (PDOEXCEPTION $e) {
        $message = $e->getMessage();
        die($message);
    }

}

function updateSession($pdo)
{
    try {
        $query = 'select * from utilisateur where utilID = :utilID';
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

function deleteUser($pdo)
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
