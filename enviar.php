<?php
$errores = [];

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nombre = trim($_POST["nombre"] ?? "");
    $email = trim($_POST["correo"] ?? "");
    $mensaje = trim($_POST["mensaje"] ?? "");

    $errores = [];

    if($nombre === "")  $errores[] = "El nombre es obligatorio.";
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) $errores[] = "El email no es válido.";
    if ($mensaje === "") $errores[] = "El mensaje es obligatorio.";

if (count ($errores) === 0) {
    mail("info@tuempresa.com", "Nuevo mensaje de contacto",
    "Nombre: $nombre\nEmail: $email\n\n$mensaje",
    "From: no-reply@tuempresa.com");

    header("Location: gracias.php");
    exit;
   
    }
    }
    ?>
    

    <?php include "header.php"; ?>
    <main class="contenedor">
    <h1>revise el formulario</h1>
    <ul>
    <?php foreach ($errores as $error) { echo "<li>" . htmlspecialchars($error) . "</li>"; } ?>
    </ul>

    <a href="contacto.php"  class = "boton">Volver al formulario</a>

    </main>
    <?php include "footer.php"; ?>
