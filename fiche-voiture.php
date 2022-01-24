<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/fiche-voiture.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito:wght@600;800;900&family=Prompt:wght@300;400&display=swap"
        rel="stylesheet">
    <title>Test- OPHELIA SENSORS</title>
</head>

<?php
    if (isset($_GET["mode"]) && ($_GET["mode"] == 'light' || $_GET["mode"] == 'dark')){
        $mode = $_GET["mode"];
    } else {
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

    <main>
        <!-- Flèche retour -->
        <a href="index.php?mode=<?= $mode ?>" class="back">
            <svg width="10vw" height="10vw" viewBox="0 0 84 84" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M38.5 17.5L14 42L38.5 66.5" stroke-width="5" stroke-linecap="round"
                    stroke-linejoin="round" />
                <path d="M14 42H70" stroke-width="5" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
        </a>

        <h1></h1>

        <section class="item-details">

            <div class="img">
                <img src="" alt="">
            </div>

            <div class="infos">
                <div class="marque">
                    <p class="label">Marque</p>
                    <p class="caracteristique"></p>
                </div>
                <div class="annee-prod">
                    <p class="label">Année(s)&nbsp;production</p>
                    <p class="caracteristique"></p>
                </div>
                <div class="prod">
                    <p class="label">Production</p>
                    <p class="caracteristique"></p>
                </div>
                <div class="assemblage">
                    <p class="label">Assemblé&nbsp;à</p>
                    <p class="caracteristique"></p>
                </div>
                <div class="description">
                    <p></p>
                </div>
                <div class="poids">
                    <p class="label">Poids</p>
                    <p class="caracteristique"></p>
                </div>
                <div class="moteur">
                    <p class="label">Moteur</p>
                    <p class="caracteristique"></p>
                </div>
                <div class="carrosserie">
                    <p class="label">Carrosserie</p>
                    <p class="caracteristique"></p>
                </div>
                <div class="pos-moteur">
                    <p class="label">Position&nbsp;moteur</p>
                    <p class="caracteristique"></p>
                </div>
            </div>

            <div class="infos">
                <div class="accel">
                    <p class="label">Accélération</p>
                    <p class="caracteristique"></p>
                </div>
                <div class="vit-max">
                    <p class="label">Vitesse&nbsp;max.</p>
                    <p class="caracteristique"></p>
                </div>
                <div class="puiss-max">
                    <p class="label">Puissance&nbsp;max.</p>
                    <p class="caracteristique"></p>
                </div>
                <div class="classe">
                    <p class="label">Classe</p>
                    <p class="caracteristique"></p>
                </div>
                <div class="boite-vit">
                    <p class="label">Boite&nbsp;de&nbsp;vitesses</p>
                    <p class="caracteristique"></p>
                </div>
                <div class="couple-max">
                    <p class="label">Couple&nbsp;maximal</p>
                    <p class="caracteristique"></p>
                </div>
                <div class="energie">
                    <p class="label">Energie</p>
                    <p class="caracteristique"></p>
                </div>
                <div class="emission-co2">
                    <p class="label">Emissions&nbsp;de&nbsp;CO2</p>
                    <p class="caracteristique"></p>
                </div>
                <div class="conso">
                    <p class="label">Consommation</p>
                    <p class="caracteristique"></p>
                </div>
                <div class="transmission">
                    <p class="label">Transmission</p>
                    <p class="caracteristique"></p>
                </div>
                <div class="cylindree">
                    <p class="label">Cylindrée</p>
                    <p class="caracteristique"></p>
                </div>
            </div>

            <!-- Courbe d'accélération -->
            <div class="graph"></div>

        </section>
    </main>

    <script>

        <?php 
            if (isset($_GET["id"]) && $_GET["id"] != ''){
                $id = $_GET["id"];
        ?>
        var id = <?= $id ?>;
        var mode = '<?= $mode ?>';

        <?php 
            } else {
                // Dans le cas où l'utilisateur accède à cette page sans cliquer sur un modèle ou modifie l'URL de manière incorrecte, le message ci-dessous s'affiche à la place des données
                echo ("document.querySelector('main').innerHTML = \"<p class='error'>Veuillez retourner à la <a href='index.php?mode=".$mode."'>page d'accueil</a> et sélectionner un modèle pour découvrir ses caractéristiques.</p>\";");
            }
        ?>
    </script>

    <script src="js/change-mode.js"></script>
    <script src="js/plotly-2.4.2.min.js"></script>
    <script src="js/fiche-voiture.js"></script>

</body>

</html>