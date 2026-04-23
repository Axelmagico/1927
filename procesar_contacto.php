<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // 1. Anti-Spam Check
    if (!empty($_POST['b_nickname'])) { die("Bot detectado."); }

    $data = [
        date("Y-m-d H:i:s"),
        $_POST['nombre'],
        $_POST['apellido'],
        $_POST['telefono'],
        $_POST['email'],
        $_POST['evento'],
        $_POST['fecha'],
        $_POST['personas']
    ];

    // 2. Guardar en CSV externo
    $file = fopen("solicitudes_eventos.csv", "a");
    fputcsv($file, $data);
    fclose($file);

    // 3. Enviar Email
    $to = "corporacionweb@gmail.com";
    $subject = "Nueva Solicitud de Evento: " . $_POST['evento'];
    $message = "Detalles:\n" . implode("\n", $data);
    $headers = "From: webmaster@casa1927.com";

    mail($to, $subject, $message, $headers);

    echo "Gracias, tu solicitud ha sido enviada con éxito.";
}
?>
