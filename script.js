document.addEventListener('DOMContentLoaded', () => {
    // 1. Inicializar AOS (Animaciones al hacer scroll)
    AOS.init({ duration: 1200, once: true });

    // 2. Botón Subir Arriba
    const btnScroll = document.getElementById('scrollTop');
    window.addEventListener('scroll', () => {
        if (window.scrollY > 400) {
            btnScroll.style.display = "block";
        } else {
            btnScroll.style.display = "none";
        }
    });
    btnScroll.addEventListener('click', () => {
        window.scrollTo({ top: 0, behavior: 'smooth' });
    });

    // 3. Manejo del Formulario
    const portalForm = document.getElementById('portalForm');
    portalForm.addEventListener('submit', function(e) {
        // Permitimos que el formulario se envíe al PHP
        console.log('Enviando solicitud...');
    });
});