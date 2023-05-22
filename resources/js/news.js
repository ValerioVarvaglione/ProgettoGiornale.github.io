
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
            }, 8000); // Cambia notizia ogni 6 secondi
          }
      
          // Avvia la visualizzazione delle news
          showNews();


          // window.addEventListener('scroll', function() {
          //   var navbar = document.getElementById('navbarColor');
          //   var links = navbar.getElementsByClassName('nav-link');
            
          //   // Aggiungi la classe active al link corrente durante lo scroll
          //   for (var i = 0; i < links.length; i++) {
          //     var link = links[i];
          //     var sectionId = link.getAttribute('href').slice(1);
          //     var section = document.getElementById(sectionId);
              
          //     if (section && isElementInViewport(section)) {
          //       link.classList.add('active');
          //     } else {
          //       link.classList.remove('active');
          //     }
          //   }
          // });
          
          // // Funzione per verificare se un elemento è visibile nella viewport
          // function isElementInViewport(element) {
          //   var rect = element.getBoundingClientRect();
          //   return (
          //     rect.top >= 0 &&
          //     rect.left >= 0 &&
          //     rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
          //     rect.right <= (window.innerWidth || document.documentElement.clientWidth)
          //   );
          // }


          // window.addEventListener('scroll', function() {
          //   var navbar = document.getElementById('navbar');
          //   var logo = document.querySelector('.navbar-brand');
          //   var content = document.querySelector('.content');
          
          //   if (window.pageYOffset > 50) {
          //     logo.classList.add('visible');
          //     navbar.classList.add('navbar-scroll');
          //     content.style.marginTop = navbar.offsetHeight + 'px';
          //   } else {
          //     logo.classList.remove('visible');
          //     navbar.classList.remove('navbar-scroll');
          //     content.style.marginTop = '0';
          //   }
          // });


          // Swiper
          var swiper = new Swiper(".mySwiper", {
            cssMode: true,
            navigation: {
              nextEl: ".swiper-button-next",
              prevEl: ".swiper-button-prev",
            },
            pagination: {
              el: ".swiper-pagination",
            },
            mousewheel: true,
            keyboard: true,
          });

          // Navbar

          // let navbarColor = document.getElementById('navbarColor');
          // let navbarLogo = document.getElementById('navbarLogo');
          // let navLogo1 = document.getElementById('navLogo1');
          // let navbarLinks = document.querySelectorAll('#navbarColor .nav-link:not([data-bs-toggle="offcanvas"])');
          // let searchMenu = document.getElementById('menu');
          // let menuSearch = document.getElementById('search');



          // window.addEventListener('scroll', () => {

          //     if (window.scrollY > 100) {
             
          //       navLogo1.classList.remove('d-none')
          //       document.querySelectorAll('.central-links').forEach(link => {
          //         link.classList.add('d-none')
          //       });
          //     } else {
          //       navLogo1.classList.add('d-none')
          //       document.querySelectorAll('.central-links').forEach(link => {
          //         link.classList.remove('d-none')
          //       });
            

          //     }

          // });

    
         

       
  
  
      
        
          