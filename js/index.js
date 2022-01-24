document.addEventListener("DOMContentLoaded", function () {
    // Variable qui contient les caractères lors de la saisie de la barre de recherche
    let query;

    // Affichage d'une carte
    function displayCard(element, i) {
        document.querySelector('.cards-list').innerHTML += `<div class="card">
            <h2>${element["Nom"]}</h2>
            <img src="${element.img}" alt="">
            <p><strong>Marque : </strong>${element["Marque"]}</p>
            <p><strong>Moteur :</strong> ${element["Moteur"]}</p>
            <p><strong>Accélération :</strong> ${element["Accélération"]}</p>
            <p><strong>Vitesse max. :</strong> ${element["Vitesse maximale"]}</p>
            <a href="fiche-voiture.php?id=${i}&mode=${mode}" class="card-button">PLUS D'INFOS</a>
        </div>`;
    }

    // Au lancement de la page, toutes les cartes s'affichent
    fetch("data.json").then(response => {
        response.json().then(data => {
            console.log(data);
            data.forEach((element, i) => {
                displayCard(element, i);
            })
        })
    })

    // Au changement de mode, les cartes s'affichent à nouveau avec les bons styles
    document.querySelector('.icon-mode').addEventListener('click', () => {
        // Effacer le contenu de la section pour ne pas accumuler les cartes obsolètes
        document.querySelector('.cards-list').innerHTML = '';
        fetch("data.json").then(response => {
            response.json().then(data => {
                console.log(data);
                data.forEach((element, i) => {
                    displayCard(element, i);
                })
            })
        })
    
    })

    // Lors de la saisie
    document.querySelector('input').addEventListener('keyup', () => {

        document.querySelector('.cards-list').innerHTML = '';
        
        query = document.querySelector('.search').value;

        fetch("data.json").then(response => {
            response.json().then(data => {
                data.forEach((element, i) => {
                    // Afficher les modèles dont la marque correspond aux caractères saisis
                    if (element["Marque"].toLowerCase().includes(query)) {
                        displayCard(element, i)
                    }
                })
            })
        })

    })
})