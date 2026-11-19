<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Encuesta de actividad física - Paso 1</title>
    <link rel="stylesheet" href="../assests/estilos.css">
</head>
<body>

    <h1>Encuesta de Actividad Física (Paso 1 de 2)</h1>

    <p><a href="../index.php">Volver al inicio</a></p>

    <form action="encuesta2.php" method="post">

        <p><strong>1. ¿Con qué frecuencia haces ejercicio?</strong></p>
        <label><input type="radio" name="frecuencia" value="Diario" required> Diario</label><br>
        <label><input type="radio" name="frecuencia" value="Semanal"> Semanal</label><br>
        <label><input type="radio" name="frecuencia" value="Mensual"> Mensual</label><br>
        <label><input type="radio" name="frecuencia" value="Nunca"> Nunca</label>

        <p><strong>2. ¿Cuánto tiempo dedicas al ejercicio en cada sesión?</strong></p>
        <label><input type="radio" name="tiempo" value="Menos de 30 minutos" required> Menos de 30 minutos</label><br>
        <label><input type="radio" name="tiempo" value="30-60 minutos"> 30-60 minutos</label><br>
        <label><input type="radio" name="tiempo" value="1-2 horas"> 1-2 horas</label><br>
        <label><input type="radio" name="tiempo" value="Más de 2 horas"> Más de 2 horas</label>

        <br><br>
        <input type="submit" value="Siguiente paso">

    </form>

</body>
</html>