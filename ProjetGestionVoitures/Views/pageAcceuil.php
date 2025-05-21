<?php $uri = $_SERVER["REQUEST_URI"]; ?>
<?php if ($uri === "/MyCars") : ?>
    <h1>vos voitures</h1>
<?php else :?>
<h1>Liste des voitures répertoriées</h1>
<?php endif ?>
<?php if (isset($_SESSION["user"])): ?>
    <a href="createCar">Ajouter une voiture</a>
<?php endif ?>
<div class="bodyA">
    <h1>Les voitures</h1>

    <div class="flexible flex-wrap justify-content-space-around">
        <?php foreach ($car as $carV) : ?>
            <div class="border card">
                <h2 class="center"><?= $carV->voitNom  ?></h2>
                <div>
                    <div>
                        <img src="<?= $carV->voitImage ?>" alt="photo de voituer">
                    </div>
                    <div class="center">
                        <p><span>Prix <?= $carV->voitPrix  ?> - </span> <span><a href="<?= $carV->voitLien_achat  ?>" target="_blank" rel="noopener noreferrer">Lien achat</a> </span></p>
                        <a href="voitCar.php" class="btn"> Voir la voiture </a>
                        <?php if ($uri === "/MyCars") : ?>
                        <p><a href="deleteCar?VoitID=<?= $voiture->VoitID ?>">Supprimer la voiture</a></p>
                        <p><a href="updateCar?VoitID=<?= $voiture->VoitID ?>">Modifier la voiture</a></p>
                        <?php endif ?>
                    </div>
                </div>
            </div>
        <?php endforeach  ?>
    </div>

<div>