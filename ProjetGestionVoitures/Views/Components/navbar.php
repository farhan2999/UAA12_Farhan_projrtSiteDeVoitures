<header>
    <ul class="flexible justify-content-space-between ">
        <?php if (isset($_SESSION["user"])) : ?>
            <li><a href="/">Acceuil</a></li>
            <li><a href="updateProfil">Profil</a></li>
            <li><a href="myCars">vos voitures</a></li>
            <li><a href="deconnexion">Déconnexion</a></li>
        <?php else : ?>
            <li><a href="/">Acceuil</a></li>
            <li><a href="inscription">Inscription</a></li>
            <li><a href="connexion">Connexion</a></li>
        <?php endif ?>
    </ul>
</header>