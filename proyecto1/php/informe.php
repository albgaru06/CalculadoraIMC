<?php

$frecuencia = $_POST['frecuencia'] ?? '';
$tiempo = $_POST['tiempo'] ?? '';

$actividades = $_POST['actividades'] ?? [];
$deportes = $_POST['deportes'] ?? [];

$archivo = fopen("../csv/encuestas.csv", "a");

if ($archivo === false) {
    exit("No se ha podido abrir el archivo CSV.");
}

fputcsv($archivo, [
    $frecuencia,
    $tiempo,
    implode(", ", $actividades),
    implode(", ", $deportes)
], ";");

fclose($archivo);

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Encuesta guardada</title>
    <link rel="stylesheet" href="../assests/estilos.css">
</head>

<body>

    <h1>Encuesta guardada correctamente</h1>

    <p><strong>Frecuencia:</strong> <?php echo htmlspecialchars($frecuencia); ?></p>

    <p><strong>Tiempo:</strong> <?php echo htmlspecialchars($tiempo); ?></p>

    <p>
        <strong>Actividades:</strong>
        <?php echo htmlspecialchars(implode(", ", $actividades)); ?>
    </p>

    <p>
        <strong>Deportes:</strong>
        <?php echo htmlspecialchars(implode(", ", $deportes)); ?>
    </p>

    <p><a href="encuesta.php">Realizar otra encuesta</a></p>

    <p><a href="estadisticas.php">Ver estadísticas de las encuestas</a></p>

    <p><a href="../index.php">Volver al inicio</a></p>

</body>
</html>
