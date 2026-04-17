<?php
session_start();
$password_maestra = "admin123"; 

if (isset($_POST['login'])) {
    if ($_POST['pass'] == $password_maestra) { $_SESSION['admin'] = true; }
}

if (!isset($_SESSION['admin'])): ?>
    <form method="POST">
        <input type="password" name="pass" placeholder="Contraseña">
        <button name="login">Entrar al Panel</button>
    </form>
<?php else: ?>
    <h1>Panel de Control - Casa 1527</h1>
    
    <h3>1. Subir Fotos/Videos a la Galería</h3>
    <form action="subir.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="archivo" required>
        <button type="submit">Subir a Galería</button>
    </form>

    <h3>2. Reservar Fecha en Calendario</h3>
    <form action="guardar_fecha.php" method="POST">
        <input type="date" name="fecha_reserva" required>
        <input type="text" name="titulo" placeholder="Ej: Boda Reservada" required>
        <button type="submit">Bloquear Fecha</button>
    </form>
    
    <a href="logout.php">Cerrar Sesión</a>
<?php endif; ?>
