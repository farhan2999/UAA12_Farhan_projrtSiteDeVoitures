<div class="bodyIC">
    <div class="container">
        <h1>Inscription</h1>
        <form action="" method="POST">
            <div class="form-group">
                <label for="firstname">Prénom</label>
                <input type="text" id="firstname" name="firstname" placeholder="Votre prénom" required>
            </div>
            <div class="form-group">
                <label for="lastname">Nom</label>
                <input type="text" id="lastname" name="lastname" placeholder="Votre nom" required>
            </div>
            <div class="form-group">
                <label for="signup-email">Email</label>
                <input type="email" id="signup-email" name="email" placeholder="Votre email" required>
            </div>
            <div class="form-group">
                <label for="signup-password">Mot de passe</label>
                <input type="password" id="signup-password" name="password" placeholder="Votre mot de passe" required>
            </div>
            <div class="form-group">
                <label for="confirm_password">Confirmez le mot de passe</label>
                <input type="password" id="confirm_password" name="confirm_password" placeholder="Confirmez votre mot de passe" required>
            </div>
            <button type="submit" class="btn" value="btn">S'inscrire</button>
            <div class="link">
                <a href="connexion.php">Déjà un compte ? Connectez-vous</a>
            </div>
        </form>
    </div>
</div>