
<?php
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: index.html");
    exit;
}

$nombre = htmlspecialchars($_POST["nombre"] ?? "", ENT_QUOTES, "UTF-8");
$correo = htmlspecialchars($_POST["correo"] ?? "", ENT_QUOTES, "UTF-8");
$mensaje = htmlspecialchars($_POST["mensaje"] ?? "", ENT_QUOTES, "UTF-8");

echo "<!DOCTYPE html>";
echo "<html lang='es'>";
echo "<head>";
echo "<meta charset='UTF-8'>";
echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
echo "<title>Mensaje recibido</title>";
echo "</head>";
echo "<body style='font-family:Arial;background:#eee;padding:30px'>";

echo "<div style='max-width:600px;margin:auto;background:white;padding:30px;border-radius:15px'>";
echo "<h1 style='color:green'>Turismo Santivañez</h1>";
echo "<h2>¡Mensaje recibido correctamente!</h2>";

echo "<p><strong>Nombre:</strong> " . $nombre . "</p>";
echo "<p><strong>Correo:</strong> " . $correo . "</p>";
echo "<p><strong>Mensaje:</strong> " . nl2br($mensaje) . "</p>";

echo "<a href='index.html'>Volver al formulario</a>";
echo "</div>";
echo "</body>";
echo "</html>";
?>
