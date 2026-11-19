<?php

function leerEncuestas() {

    $encuestas = [];

    $archivo = fopen("../csv/encuestas.csv", "r");

    if ($archivo != false) {

        while (($fila = fgetcsv($archivo, 0, ";")) != false) {
            $encuestas[] = $fila;
        }

        fclose($archivo);
    }

    return $encuestas;
}


function contarRespuestas($encuestas, $columna) {

    $respuestas = [];

    foreach ($encuestas as $encuesta) {

        $respuesta = $encuesta[$columna];

        if ($columna == 2 || $columna == 3) {
            $lista = explode(", ", $respuesta);
        } else {
            $lista = [$respuesta];
        }

        foreach ($lista as $opcion) {

            if ($opcion != "") {

                if (isset($respuestas[$opcion])) {
                    $respuestas[$opcion]++;
                } else {
                    $respuestas[$opcion] = 1;
                }
            }
        }
    }

    return $respuestas;
}

function mostrarEstadisticas($titulo, $respuestas, $total) {

    echo "<h2>$titulo</h2>";

    if (count($respuestas) == 0) {
        echo "<p>No hay respuestas registradas.</p>";
        return;
    }

    echo "<table>";
    echo "<tr><th>Respuesta</th><th>Cantidad</th><th>Porcentaje</th></tr>";

    foreach ($respuestas as $opcion => $cantidad) {

        $porcentaje = round(($cantidad / $total) * 100, 2);

        echo "<tr>";
        echo "<td>" . htmlspecialchars($opcion) . "</td>";
        echo "<td>$cantidad</td>";
        echo "<td>$porcentaje%</td>";
        echo "</tr>";
    }

    echo "</table>";
}

$encuestas = leerEncuestas();

$total = count($encuestas);

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informe de actividad física</title>
    <link rel="stylesheet" href="../assests/estilos.css">
</head>

<body>

    <h1>Informe de actividad física</h1>

    <p>Total de encuestas: <?php echo $total; ?></p>

    <?php

    if ($total == 0) {

        echo "<p>Todavía no hay encuestas guardadas.</p>";

    } else {

        $frecuencias = contarRespuestas($encuestas, 0);
        $tiempos = contarRespuestas($encuestas, 1);
        $actividades = contarRespuestas($encuestas, 2);
        $deportes = contarRespuestas($encuestas, 3);

        mostrarEstadisticas("Frecuencia del ejercicio", $frecuencias, $total);

        mostrarEstadisticas("Tiempo dedicado al ejercicio", $tiempos, $total);

        mostrarEstadisticas("Tipos de ejercicio", $actividades, $total);

        mostrarEstadisticas("Deportes practicados", $deportes, $total);
    }

    ?>

    <p><a href="encuesta.php">Volver a la encuesta</a></p>
    <p><a href="../index.php">Volver al inicio</a></p>

</body>
</html>