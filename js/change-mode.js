document.addEventListener("DOMContentLoaded", function () {

    document.querySelector('.icon-mode').addEventListener('click', e => {
        // Si le mode actuel est le mode dark
        if (document.querySelector('body').classList.contains('dark')) {
            // Passage au mode light en ajoutant la classe light
            document.querySelector('body').classList.add('light');
            document.querySelector('body').classList.remove('dark');
            // Modification de l'icone
            e.target.setAttribute('src', 'img/moon.png');
            e.target.setAttribute('alt', 'Dark mode');
            mode = 'light';
        } else {
            // Passage au mode dark en ajoutant la classe dark
            document.querySelector('body').classList.add('dark');
            document.querySelector('body').classList.remove('light');
            // Modification de l'icone
            e.target.setAttribute('src', 'img/sun.png');
            e.target.setAttribute('alt', 'Light mode');
            mode = 'dark';
        }
    })
})