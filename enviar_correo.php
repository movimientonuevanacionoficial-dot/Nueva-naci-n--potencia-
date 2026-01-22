<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $destinatario = "movimientonuevanacionoficial@gmail.com";
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $mensaje = $_POST['mensaje'];

    $asunto = "NUEVA PROPUESTA: " . $nombre;
    
    $cuerpo = "Has recibido un nuevo mensaje desde la web de Nueva Nación:\n\n";
    $cuerpo .= "Nombre: " . $nombre . "\n";
    $cuerpo .= "Email: " . $email . "\n";
    $cuerpo .= "Mensaje: \n" . $mensaje;

    // Cabeceras para que llegue correctamente
    $headers = "From: " . $email . "\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion();

    if (mail($destinatario, $asunto, $cuerpo, $headers)) {
        echo "<script>alert('Mensaje enviado con éxito. Hacia la Venezuela Potencia.'); window.location.href='index.html';</script>";
    } else {
        echo "<script>alert('Error al enviar. Intente más tarde.'); window.history.back();</script>";
    }
}
?>
