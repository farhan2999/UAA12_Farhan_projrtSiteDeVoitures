<div class="bodyA">
    <h1>Les Voitures</h1>

    <div class="flexible flex-wrap justify-content-space-around">
        <?php foreach ($car as $carV) : ?>
            <div class="border card">
                <h2 class="center"><?= $carV->voitNom  ?></h2>
                <div>
                    <div>
                        <img src="<?= $carV->voitImage   ?>" alt="photo de l'école">
                    </div>
                    <div class="center">
                        <p><span>Prix <?= $carV->voitPrix  ?> - </span> <span><a href="<?= $carV->voitLien_achat  ?>" target="_blank" rel="noopener noreferrer">Lien achat</a> </span></p>
                    </div>
                </div>
            </div>
        <?php endforeach  ?>
    </div>

</div>