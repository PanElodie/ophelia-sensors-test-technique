<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito:wght@600;800;900&family=Prompt:wght@300;400&display=swap"
        rel="stylesheet">
    <title>Test - OPHELIA SENSORS</title>
</head>

<?php
    // Détecter si un mode (light ou dark) a été choisi et l'appliquer sur la page
    if (isset($_GET["mode"]) && ($_GET["mode"] == 'light' || $_GET["mode"] == 'dark')){
        $mode = $_GET["mode"];
    } else {
        // Mode par défaut : mode light
        $mode = "light";
    }

    if ($mode == 'light'){
        $icon = 'moon';     // Mode light : icone lune
        $alt = 'Light';
    } else {
        $icon = 'sun';      // Mode dark : icone soleil
        $alt = 'Dark';
    }
?>

<body class="<?= $mode ?>">
    <img class="icon-mode" src="img/<?= $icon ?>.png" alt="<?= $alt ?> mode">

    <h1>NOS MODELES DE VOITURE</h1>
    <form action="index.php">
        <div>
            <!-- Icone Loupe -->
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="search-icon">
                <path
                    d="M10 18C11.775 17.9996 13.4988 17.4054 14.897 16.312L19.293 20.708L20.707 19.294L16.311 14.898C17.405 13.4997 17.9996 11.7754 18 10C18 5.589 14.411 2 10 2C5.589 2 2 5.589 2 10C2 14.411 5.589 18 10 18ZM10 4C13.309 4 16 6.691 16 10C16 13.309 13.309 16 10 16C6.691 16 4 13.309 4 10C4 6.691 6.691 4 10 4Z"/>
            </svg>

            <input type="text" class="search" placeholder="Rechercher une marque">
        </div>
    </form>

    <!-- Section dans laquelle s'affichent les cartes -->
    <section class="cards-list"></section>

    <script>
        // Variable globale utilisable dans les autres fichiers js indiquant le mode au lancement de la page
        var mode = '<?= $mode ?>';
    </script>
    <script src="js/change-mode.js"></script>
    <script src="js/index.js"></script>
    
</body>

</html>