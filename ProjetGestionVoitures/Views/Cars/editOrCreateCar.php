<div class="bodyIC">
    <div class="container">
        <h1>  Create Car</h1>
        <form action="" method="POST">
            <div class="form-group">
                <label for="voitNom">name_car</label>
                <input type="text" id="voitNom" name="name_car" placeholder="name car" <?php if (isset($car)) : ?> <?php endif ?> required>
            </div>
            <div class="form-group">
                <label for="voitPrix">prix</label>
                <input type="text" id="voitPrix" name="le_prix" placeholder="le prix" <?php if (isset($car)) : ?> <?php endif ?> required>
            </div>
            <div class="form-group">
                <label for="voitLien_achat">Lien Achat</label>
                <input type="text" id="voitLien_achat" name="Lien_Achat" placeholder="Lien Achat" <?php if (isset($car)) : ?> <?php endif ?> required>
            </div>
            <div class="form-group">
                <label for="voitImage">Photo voiture</label>
                <input type="text" id="voitImage" name="image" placeholder="Photo voiture" <?php if (isset($car)) : ?> <?php endif ?>>
            </div>
            <select name="type_voiture" id="type-select" >
                <?php foreach ($tyVois as $tyVoi) : ?>
                    <option value="<?= $tyVoi->tyVoiID ?>" ><?= $tyVoi->tyVoi ?></option>
                <?php endforeach ?>
            </select>
            <select name="type_moto" id="type-select" >
                <?php foreach ($tymotors as $tymotor) : ?>
                    <option value="<?= $tymotor->motorID ?>" ><?= $tymotor->tyMotor ?></option>
                <?php endforeach ?>
            </select>
            <div>
                <button name="btn" class="btn" value="btn"><?php if (isset($pdo)) : ?>Modifier <?php else : ?> créer<?php endif ?> </button>
            </div>
        </form>
    </div>
</div>