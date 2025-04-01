
<h1>Les mods créer par la communauté</h1>

<div class="flexible flex-wrap justify-content-space-around">
    <?php foreach ($tyVoiFamiliale as $type_voiture) : ?>
        <div class="border card">
            <h2 class="center"><?= $tyVoiFamiliale->type_voiture ?></h2>
            <div>
                <div>
                    <img src="<?= $oi->yuy ?>" alt="photo de l'école">
                </div>
                <div class="center">
                    <p><span>Date de parution<?=$yo->yo ?> - </span> <span><?=$op->op ?></span></p>
                    <a href="voirEcole.php" class="btn btn-page">Voir l'école</a>
                </div>
            </div>
        </div>
    <?php endforeach  ?>
</div>


/* pas fini