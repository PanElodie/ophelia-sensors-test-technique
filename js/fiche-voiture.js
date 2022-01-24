document.addEventListener("DOMContentLoaded", function () {

    // Au changement de mode, le lien est modifié
    document.querySelector('.icon-mode').addEventListener('click', () => {
        document.querySelector('.back').setAttribute('href', `index.php?mode=${mode}`);
    })

    function getGraph(item){
        let graph = document.querySelector('.graph');

        // Insertion des données dans la div dédiée au graphique, en utilisant Plotly.js
        Plotly.newPlot(graph, [{
            x: item["Courbe d'accélération"]["time"],
            y: item["Courbe d'accélération"]["Accélération"],
        }], {
            xaxis: {
                title: "Temps (en s)"
            },
            yaxis: {
                title: "Accélération (en m.s<sup>-2</sup>)"
            }
        });
    }

    fetch("data.json").then(response => {
        response.json().then(data => {

            let item = data[id];

            document.querySelector('h1').innerHTML = item["Nom"];
            document.querySelector('.item-details img').setAttribute('src', item["img"]);
            document.querySelector('.marque .caracteristique').innerHTML = item["Marque"];
            document.querySelector('.annee-prod .caracteristique').innerHTML = item["Années de production"];
            document.querySelector('.prod .caracteristique').innerHTML = item["Production"];
            document.querySelector('.assemblage .caracteristique').innerHTML = item["Usine d'assemblage"];
            document.querySelector('.description p').innerHTML = item["Description"];
            document.querySelector('.poids .caracteristique').innerHTML = item["Poids"];
            document.querySelector('.moteur .caracteristique').innerHTML = item["Moteur"];
            document.querySelector('.carrosserie .caracteristique').innerHTML = item["Carrosserie"];
            document.querySelector('.pos-moteur .caracteristique').innerHTML = item["Position du moteur"];
            document.querySelector('.accel .caracteristique').innerHTML = item["Accélération"];
            document.querySelector('.vit-max .caracteristique').innerHTML = item["Vitesse maximale"];
            document.querySelector('.puiss-max .caracteristique').innerHTML = item["Puissance maximale"];
            document.querySelector('.boite-vit .caracteristique').innerHTML = item["Boite de vitesses"];
            document.querySelector('.classe .caracteristique').innerHTML = item["Classe"];
            document.querySelector('.couple-max .caracteristique').innerHTML = item["Couple maximal"];
            document.querySelector('.energie .caracteristique').innerHTML = item["Energie"];
            document.querySelector('.emission-co2 .caracteristique').innerHTML = item["Emissions de CO2"];
            document.querySelector('.conso .caracteristique').innerHTML = item["Consommation"];
            document.querySelector('.transmission .caracteristique').innerHTML = item["Transmission"];
            document.querySelector('.cylindree .caracteristique').innerHTML = item["Cylindrée"];

            getGraph(item);

            // Afficher à nouveau le graphique pour l'adapter aux dimensions de la fenêtre du navigateur
            window.addEventListener('resize', () => {
                getGraph(item);
            })


        })
    })
})