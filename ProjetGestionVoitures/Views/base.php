<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>5TTI_Abuzour_Projet</title>
    <link rel="stylesheet" href="/Assets/CSS/flexible.css">
    <link rel="stylesheet" href="/Assets/CSS/style.css">
</head>
<body>
    <header>
        <?php require_once("Views/Components/navBar.php"); ?>
    </header>
    <main>
        <?php require_once($template); ?>
    </main>
    <footer>
        <?php require_once("Views/Components/footer.php"); ?>
    </footer>
</body>
</html>