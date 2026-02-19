<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vacaciones con Propósito - Refuerzo Académico de Élite</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <button id="scrollTop"><i class="fas fa-arrow-up"></i></button>

    <div class="cupos-banner">
        ¡Atención! Quedan solo <span id="contador-cupos">12</span> cupos disponibles para el ciclo 2026.
    </div>

    <nav class="navbar">
        <div class="container">
            <h2 class="logo">Vacaciones <span>con Propósito</span></h2>
            <ul class="nav-links">
                <li><a href="#beneficios">Beneficios</a></li>
                <li><a href="#materias">Materias</a></li>
                <li><a href="#contacto">Inscripciones</a></li>
            </ul>
        </div>
    </nav>

    <header class="hero">
        <div class="hero-content" data-aos="zoom-in">
            <h1>Vacaciones con Propósito</h1>
            <p>Donde el aprendizaje y la diversión se unen para potenciar el futuro de tus hijos.</p>
            <a href="#contacto" class="btn-hero">Reserva un Cupo Hoy</a>
        </div>
    </header>

    <section id="beneficios" class="about-us">
        <div class="container" data-aos="fade-up">
            <h2>¿Por qué elegirnos?</h2>
            <p>Nuestro programa vacacional no solo refuerza conocimientos, sino que inspira confianza y creatividad en cada estudiante.</p>
            <div class="about-grid">
                <div class="about-item">
                    <i class="fas fa-certificate"></i>
                    <h3>Certificación</h3>
                    <p>Entregamos un certificado de participación que avala las horas de refuerzo académico.</p>
                </div>
                <div class="about-item">
                    <i class="fas fa-laptop-code"></i>
                    <h3>Material Digital</h3>
                    <p>Acceso a nuestra plataforma con recursos exclusivos y guías de estudio interactivas.</p>
                </div>
                <div class="about-item">
                    <i class="fas fa-chalkboard-teacher"></i>
                    <h3>Clases Prácticas</h3>
                    <p>Metodologías activas donde el estudiante es el protagonista de su aprendizaje.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="materias" class="services">
        <div class="container">
            <h2 data-aos="fade-down">Nuestras Materias</h2>
            <div class="service-grid">
                <div class="service-item" data-aos="fade-right">
                    <div class="img-wrapper">
                        <img src="image/ingles.jpg" alt="Inglés">
                        <div class="overlay">English is Fun!</div>
                    </div>
                    <h3><i class="fas fa-language"></i> Inglés</h3>
                    <p>Nivelación dinámica y conversación fluida para un mundo globalizado.</p>
                </div>
                <div class="service-item" data-aos="fade-up">
                    <div class="img-wrapper">
                        <img src="image/literatura.jpg" alt="Lenguaje">
                        <div class="overlay">Lectura Crítica</div>
                    </div>
                    <h3><i class="fas fa-book-open"></i> Lenguaje y Literatura</h3>
                    <p>Potenciamos la redacción creativa, la ortografía y el amor por la lectura.</p>
                </div>
                <div class="service-item" data-aos="fade-left">
                    <div class="img-wrapper">
                        <img src="image/mates.jpg" alt="Matemáticas">
                        <div class="overlay">Lógica Pura</div>
                    </div>
                    <h3><i class="fas fa-calculator"></i> Matemáticas</h3>
                    <p>Métodos lúdicos para dominar el razonamiento lógico y numérico.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="contacto" class="contact">
        <div class="container">
            <div class="form-container" data-aos="flip-left">
                <h2>Contáctanos</h2>
                <p>¡Inscribe a tu hijo hoy mismo y comienza su viaje hacia la excelencia!</p>
                
                <?php if(isset($_GET['status']) && $_GET['status'] == 'success'): ?>
                    <div class="alert success">¡Registro recibido! Revisa tu email para la bienvenida.</div>
                <?php endif; ?>

                <form action="enviar.php" method="POST" class="contact-form">
                    <input type="text" name="nombre" placeholder="Nombre del Representante" required>
                    <input type="email" name="correo" placeholder="Correo Electrónico" required>
                    <select name="materia_interes">
                        <option value="Inglés">Interés: Inglés</option>
                        <option value="Lenguaje">Interés: Lenguaje</option>
                        <option value="Matemáticas">Interés: Matemáticas</option>
                        <option value="Todas">Todas las materias</option>
                    </select>
                    <textarea name="message" placeholder="¿Tienes alguna duda adicional?" rows="4"></textarea>
                    <button type="submit" class="btn">Enviar Inscripción</button>
                </form>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <p>&copy; 2026 Vacaciones con Propósito. Todos los derechos reservados.</p>
        </div>
    </footer>

    <a href="https://wa.me/593999999999" class="whatsapp-btn" target="_blank">
        <i class="fab fa-whatsapp"></i>
    </a>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="js/script.js"></script>
</body>
</html>