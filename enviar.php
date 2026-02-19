<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // 1. Recoger y sanitizar datos
    $nombre  = strip_tags(trim($_POST["nombre"]));
    $email   = filter_var(trim($_POST["correo"]), FILTER_SANITIZE_EMAIL);
    $materia = $_POST["materia_interes"];
    $mensaje = htmlspecialchars(trim($_POST["mensaje"]));

    // --- CONFIGURACIÓN ---
    $mi_correo = "amandapatricia1990@gmail.com"; 
    $nombre_academia = "Vacaciones con Propósito";

    // 2. CORREO PARA TI (Notificación de nuevo registro)
    $asunto_admin = "Nuevo Interesado: $nombre - Materia: $materia";
    $cuerpo_admin = "Detalles del registro:\n";
    $cuerpo_admin .= "Nombre: $nombre\n";
    $cuerpo_admin .= "Email: $email\n";
    $cuerpo_admin .= "Materia: $materia\n";
    $cuerpo_admin .= "Mensaje: $mensaje\n";
    
    $headers_admin = "From: Web Vacacional <no-reply@tu-dominio.com>\r\n";
    $headers_admin .= "Reply-To: $email\r\n";

    // 3. CORREO PARA EL CLIENTE (Respuesta Automática)
    $asunto_cliente = "¡Gracias por tu interés en $nombre_academia!";
    
    $headers_cliente = "From: $nombre_academia <$mi_correo>\r\n";
    $headers_cliente .= "Mime-Version: 1.0\r\n";
    $headers_cliente .= "Content-Type: text/html; charset=UTF-8\r\n";

    $cuerpo_cliente = "
    <html>
    <body style='font-family: Arial, sans-serif; line-height: 1.6; color: #333;'>
        <div style='max-width: 600px; margin: 0 auto; border: 1px solid #eee; padding: 20px;'>
            <h2 style='color: #003366;'>¡Hola, $nombre!</h2>
            <p>Hemos recibido tu solicitud para el curso de <strong>$materia</strong>.</p>
            <p>En las próximas 24 horas, uno de nuestros asesores se pondrá en contacto contigo para enviarte el brochure completo y los costos de inversión.</p>
            <hr style='border: 0; border-top: 1px solid #eee;'>
            <p style='font-size: 0.9em; color: #666;'>
                Si tienes prisa, puedes escribirnos directamente a nuestro WhatsApp haciendo clic en el botón de la página.
            </p>
            <p>Atentamente,<br><strong>El equipo de $nombre_academia</strong></p>
        </div>
    </body>
    </html>
    ";

    // 4. EJECUCIÓN DEL ENVÍO
    $enviado_admin = mail($mi_correo, $asunto_admin, $cuerpo_admin, $headers_admin);
    $enviado_cliente = mail($email, $asunto_cliente, $cuerpo_cliente, $headers_cliente);

    if ($enviado_admin && $enviado_cliente) {
        header("Location: index.html?status=success#contacto");
    } else {
        header("Location: index.html?status=error#contacto");
    }

} else {
    header("Location: index.html");
}
?>