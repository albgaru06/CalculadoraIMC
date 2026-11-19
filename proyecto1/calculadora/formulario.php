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

    <form action='../php/validar_calculadora.php' method='post'>

        Sexo:
        <input type='radio' name='sexo' value='mujer' /> Mujer
        <input type='radio' name='sexo' value='hombre' /> Hombre
        <br />

        Edad:
        <input type='number' name='edad' />
        <br />

        Altura (cm):
        <input type='number' name='altura' />
        <br />

        Peso (kg):
        <input type='number' name='peso' />
        <br />

        <input type='submit' value='Enviar' />

    </form>

    <p><a href="../index.php">Volver al inicio</a></p>

</body>

</html>