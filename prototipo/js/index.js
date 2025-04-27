document.addEventListener('DOMContentLoaded', function() {
    const searchBar = document.querySelector('.search-bar input');
    const searchOverlay = document.querySelector('.search-overlay');
    const searchMenuInput = document.querySelector('.search-menu input');
    
    searchBar.addEventListener('click', function() {
        searchOverlay.style.display = 'flex';
        searchMenuInput.focus();
    });
    
    searchOverlay.addEventListener('click', function(event) {
        if (event.target === searchOverlay) {
            searchOverlay.style.display = 'none';
        }
    });
    
    const menuIcon = document.querySelector('.menu-icon');
    const navLinks = document.querySelector('.nav-links');
    
    menuIcon.addEventListener('click', function() {
        navLinks.style.display = navLinks.style.display === 'block' ? 'none' : 'block';
    });
});

document.querySelectorAll('.filter-option').forEach(option => {
    option.addEventListener('click', function() {
        this.closest('.filter-options').querySelector('.active').classList.remove('active');
        this.classList.add('active');
    });
});

document.addEventListener('DOMContentLoaded', function () {
    // Selecciona todos los elementos que queremos observar
    const cards = document.querySelectorAll('.app-card');
  
    // Configura el Intersection Observer
    const observer = new IntersectionObserver(entries => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('visible');
        } else {
          entry.target.classList.remove('visible');
        }
      });
    }, { threshold: 0.1 });
  
    // Observa cada tarjeta
    cards.forEach(card => {
      observer.observe(card);
    });
});

document.addEventListener("DOMContentLoaded", function () {
  const inputSearch = document.getElementById("inputSearch");
  const boxSearch = document.getElementById("box-search");
  const noResultsMessage = document.getElementById("no-results-message");
  const searchItems = Array.from(boxSearch.getElementsByTagName("li"));

  inputSearch.addEventListener("input", function () {
      const filter = this.value.trim().toUpperCase();
      
      if (filter === "") {
          boxSearch.style.display = "none"; // Hide results if input is empty
          noResultsMessage.style.display = "none"; // Hide no results message
          return;
      }

      let found = false;

      searchItems.forEach(item => {
          const textValue = item.textContent || item.innerText;
          if (textValue.toUpperCase().includes(filter)) {
              item.style.display = ""; // Show item
              found = true;
          } else {
              item.style.display = "none"; // Hide item
          }
      });

      // Display results or no results message
      if (found) {
          boxSearch.style.display = "block"; // Show results
          noResultsMessage.style.display = "none"; // Hide no results message
      } else {
          boxSearch.style.display = "none"; // Hide results
          noResultsMessage.style.display = "block"; // Show no results message
      }
  });
});
document.addEventListener('DOMContentLoaded', function () {
    let lastScrollPosition = 0; // Posición del último scroll
    const nav = document.querySelector('nav'); // Seleccionar la barra de navegación
    let ticking = false; // Para evitar ejecución constante

    window.addEventListener('scroll', function () {
        let currentScrollPosition = window.pageYOffset || document.documentElement.scrollTop;

        // Si ya hay una animación en progreso, ignorar la solicitud
        if (!ticking) {
            window.requestAnimationFrame(function () {
                if (currentScrollPosition > lastScrollPosition) {
                    // Si el desplazamiento es hacia abajo
                    nav.classList.add('hidden');
                    nav.classList.remove('visible');
                } else {
                    // Si el desplazamiento es hacia arriba
                    nav.classList.add('visible');
                    nav.classList.remove('hidden');
                }

                // Actualizar la última posición de desplazamiento
                lastScrollPosition = currentScrollPosition;
                ticking = false; // Permitir nuevas animaciones
            });

            ticking = true;
        }
    });
});