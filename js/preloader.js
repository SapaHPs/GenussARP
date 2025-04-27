// Espera a que todo el contenido de la página se cargue
window.addEventListener('load', function() {
    // Selecciona el preloader
    const preloader = document.getElementById('preloader');

    // Desaparece el preloader
    preloader.style.opacity = '0';
    preloader.style.transition = 'opacity 0.5s ease-out';

    // Elimina el preloader del DOM después de la transición
    setTimeout(function() {
        preloader.style.display = 'none'; // Oculta el preloader
    }, 500); // 500ms coincide con la transición de opacidad
});
