<div class="bodyIC">
    <div class="container">
        <h1> <?php if (isset($_SESSION['user'])) : ?>Create Car <?php else : ?>Inscription <?php endif ?></h1>
        <form action="" method="POST">
            <div class="form-group">
                <label for="voitNom">name car</label>
                <input type="text" id="voitNom" name="voitNom" placeholder="name car" <?php if (isset($_SESSION['user'])) : ?>value="<?= $_SESSION['user']->voitNom ?>" <?php endif ?> required>
            </div>
            <div class="form-group">
                <label for="voitPrix">prix</label>
                <input type="text" id="voitPrix" name="voitPrix" placeholder="le prix" <?php if (isset($_SESSION['user'])) : ?>value="<?= $_SESSION['user']->voitPrix ?>" <?php endif ?> required>

            </div>
            <div class="form-group">
                <label for="voitLien_achat">Lien Achat</label>
                <input type="voitLien_achat" id="voitLien_achat" name="voitLien_achat" placeholder="Lien Achat" <?php if (isset($_SESSION['user'])) : ?>value="<?= $_SESSION['user']->voitLien_achat ?>" <?php endif ?> required>
            </div>
            <div class="form-group">
                <label for="voitImage">Photo voiture</label>
                <input type="voitImage" id="voitImage" name="voitImage" placeholder="Photo voiture" <?php if (isset($_SESSION['user'])) : ?>value="<?= $_SESSION['user']->voitImage ?>" <?php endif ?>>
            </div>
            <select name="type" id="type-select" multiple>
                <?php foreach ($tyVoi as $tyVois) : ?>
                    <option value="<?= $tyVoi->tyVoiID ?>" <?php if (isset($tyActiveCars)) : ?><?php foreach ($tyActiveCars as $ty) : ?> <?php if ($ty->tyVoiID === $tyVoi->tyVoiID) : ?>selected<?php endif ?> <?php endforeach ?><?php endif ?>><?= $ty->tyVoiID ?></option>
                <?php endforeach ?>
            </select>
            <div>
                <button name="btn" class="btn" value="btn"><?php if (isset($pdo)) : ?>Modifier <?php else : ?> créer<?php endif ?> </button>
            </div>
        </form>
    </div>
</div>