<?php

$frecuencia = $_POST['frecuencia'];
$tiempo = $_POST['tiempo'];

if ($frecuencia == "Nunca") { 
    echo "No puedes continuar porque has indicado que nunca haces ejercicio."; 
    exit;
    } 
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Encuesta de actividad física  - Paso 2</title>
    <link rel="stylesheet" href="../assests/estilos.css">
</head>

<body>

    <h1>Encuesta de Actividad Física (Paso 2 de 2)</h1>

    <form action="informe.php" method="post">

        <input type="hidden" name="frecuencia" value="<?php echo $frecuencia; ?>">
        <input type="hidden" name="tiempo" value="<?php echo $tiempo; ?>">

        <p><strong>3. ¿Qué tipo de ejercicios realizas?</strong></p>
        <label><input type="checkbox" name="actividades[]" value="Aeróbico">Aeróbico</label><br>
        <label><input type="checkbox" name="actividades[]" value="Fuerza">Fuerza</label><br>
        <label><input type="checkbox" name="actividades[]" value="Flexibilidad">Flexibilidad</label><br>
        <label><input type="checkbox" name="actividades[]" value="Otro">Otro</label>

        <p><strong>4. ¿Qué deportes practicas regularmente?</strong></p>
        <label><input type="checkbox" name="deportes[]" value="Fútbol">Fútbol</label><br>
        <label><input type="checkbox" name="deportes[]" value="Baloncesto">Baloncesto</label><br>
        <label><input type="checkbox" name="deportes[]" value="Tenis">Tenis</label><br>
        <label><input type="checkbox" name="deportes[]" value="Natación">Natación </label><br>
        <label><input type="checkbox" name="deportes[]" value="Ciclismo">Ciclismo</label><br>
        <label><input type="checkbox" name="deportes[]" value="Otro">Otro</label>
        
        <br><br>
        <input type="submit" value="Enviar encuesta">

    </form>

</body>

</html>