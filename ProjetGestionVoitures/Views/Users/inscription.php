<div class="bodyIC">
    <div class="container">
        <h1>Inscription</h1>
        <form action="" method="POST">
            <div class="form-group">
                <label for="lastname">Nom</label>
                <input type="text" id="lastname" name="lastname" placeholder="Votre nom" <?php if (isset($_SESSION['user'])) : ?>value="<?= $_SESSION['user']->utilNom ?>" <?php endif ?> required>
            </div>
            <div class="form-group">
                <label for="firstname">Prénom</label>
                <input type="text" id="firstname" name="firstname" placeholder="Votre prénom" <?php if (isset($_SESSION['user'])) : ?>value="<?= $_SESSION['user']->utilPrenom ?>" <?php endif ?> required>

            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Votre email" <?php if (isset($_SESSION['user'])) : ?>value="<?= $_SESSION['user']->utilEmail ?>" <?php endif ?> required>
            </div>
            <div class="form-group">
                <label for="password">Mot de passe</label>
                <input type="password" id="password" name="password" placeholder="Votre mot de passe" <?php if (isset($_SESSION['user'])) : ?>value="<?= $_SESSION['user']->utilMot_de_passe ?>" <?php endif ?> required>
            </div>
            <div class="form-group">
                <label for="utilPhoto_profil">Photo profil</label>
                <input type="utilPhoto_profil" id="utilPhoto_profil" name="utilPhoto_profil" placeholder="Votre Photo profil" <?php if (isset($_SESSION['user'])) : ?>value="<?= $_SESSION['user']->utilPhoto_profil ?>" <?php endif ?>>

            </div>
            <button type="submit" class="btn" name="btn" id="btn" value="btn"><?php if (isset($_SESSION['user'])) : ?>Modifier <?php else : ?>S'inscrire <?php endif ?></button>
            <div class="link">
                <a href="connexion">Déjà un compte ? Connectez-vous</a>
            </div>
        </form>
    </div>
</div>