<?php

$sexo = $_POST['sexo'];
$edad = $_POST['edad'];
$altura = $_POST['altura'];
$peso = $_POST['peso'];

if (
    !in_array($sexo, ['hombre', 'mujer']) ||
    !is_numeric($edad) || $edad <= 0 ||
    !is_numeric($altura) || $altura <= 0 ||
    !is_numeric($peso) || $peso <= 0
) {
    exit("Los datos introducidos no son válidos.");
}

$alturaMetros = $altura / 100;

$imc = $peso / ($alturaMetros * $alturaMetros);

if ($sexo == 'hombre') {
    $metabolismo = 88.362 + (13.397 * $peso) + (4.799 * $altura) - (5.677 * $edad);
} else {
    $metabolismo = 447.593 + (9.247 * $peso) + (3.098 * $altura) - (4.330 * $edad);
}

?>

<!DOCTYPE html>
<html xmlns='http://www.w3.org/1999/xhtml' lang='es'>

<head>
    <meta charset='utf-8' />
    <meta name='viewport' content='width=device-width, initial-scale=1.0' />
    <title>Calculadora de salud (IMC y metabolismo basal)</title>
    <link rel="stylesheet" href="../assests/estilos.css">
</head>

<body>

    <h1>Calculadora de salud (IMC y metabolismo basal)</h1>

    <p>Datos recogidos:</p>

    <ul>
        <li><strong>Sexo:</strong> <?php echo $sexo; ?></li>
        <li><strong>Edad:</strong> <?php echo $edad; ?></li>
        <li><strong>Altura (cm):</strong> <?php echo $altura; ?></li>
        <li><strong>Peso (kg):</strong> <?php echo $peso; ?></li>
    </ul>

    <h2>Informe</h2>

    <p>
        <strong>IMC:</strong>
        <?php
        echo round($imc, 2);
        ?>
    </p>

    <p>
        <strong>Metabolismo basal:</strong>
        <?php echo round($metabolismo, 2); ?> kcal/día
    </p>

    <br />

    <p><a href="../calculadora/calculadora.php">Volver a la calculadora</a></p>
    <p><a href="../index.php">Volver al inicio</a></p>
    
</body>

</html>