<ul class="flexible space-evenly">
    <?php if (isset($_SESSION["user"])) : ?>
        <li class="menu"><a href="index.php">Home</a></li>
        <li class="menu"><a href="mesEcoles">Mes écoles</a></li>
        <li class="menu"><a href="profil">Profil</a></li>
        <li class="menu"><a href="deconnexion">Déconnexion</a></li>
    <?php else : ?>
        <li class="menu"><a href="index.php">Home</a></li>
        <li class="menu"><a href="inscription">Inscription</a></li>
        <li class="menu"><a href="connexion">Connexion</a></li>
    <?php endif ?>
</ul>

<ul class="flexible space-evenly">
    <!-- petit écran -->
    <li class="imageMenu"><a href="index.php"><ion-icon size="large" name="home-outline"></ion-icon></a></li>
    <li class="imageMenu"><a href="inscription"><ion-icon size="large" name="person-outline"></ion-icon></a></li>
    <li class="imageMenu"> <a href="connexion"><ion-icon size="large" name="enter-outline"></ion-icon></a></li>
</ul>