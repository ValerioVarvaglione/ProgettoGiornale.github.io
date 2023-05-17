
// Array di news di esempio (puoi sostituirle con le tue news reali)
var newsArray = [
    "Ciao mi chiamo Alessandro",
    "News 2",
    "News 3",
    "News 4",
    "News 5"
];

// Funzione per visualizzare le news sulla barra
function showNews() {
    var newsIndex = 0;
    setInterval(function () {
        document.getElementById("news").textContent = newsArray[newsIndex];
        newsIndex = (newsIndex + 1) % newsArray.length;
    }, 2000); // Cambia notizia ogni 2 secondi (puoi regolare l'intervallo come desiderato)
}

// Avvia la visualizzazione delle news
showNews();
