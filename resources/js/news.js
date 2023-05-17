
        // Array di news fittizie
        var newsArray = [
            
            "Meteo, treni cancellati o in ritardo causa maltempo in Emilia Romagna" ,
            "Decreto Bollette, stop del Quirinale: il testo torna in Commissione",
            "Alessia Ambrosi, dalla farina di grilli agli attacchi a Schlein: chi è la deputata di FdI",
            "Johnny Depp a Cannes: Boicottato negli Usa? A Hollywood non penso più",
            "Pena di morte, rapporto Amnesty: 883 esecuzioni nel 2022, mai così tante dal 2017",
          ];
      
          // Funzione per visualizzare le news sulla barra
          function showNews() {
            var newsIndex = 0;
            setInterval(function() {
              document.getElementById("news").textContent = newsArray[newsIndex];
              newsIndex = (newsIndex + 1) % newsArray.length;
            }, 7000); // Cambia notizia ogni 6 secondi
          }
      
          // Avvia la visualizzazione delle news
          showNews();
       
  
  
      
        
          