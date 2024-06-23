<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Información del Empleado</title>
</head>
<body>
    <form method="post" action="">
        <label for="nombre">Ingrese su nombre:</label>
        <input type="text" id="nombre" name="nombre" required>
        <br>
        <label for="salario">Ingrese su salario:</label>
        <input type="number" id="salario" name="salario" required>
        <br>
        <label for="anios_trabajando">Ingrese los años trabajando:</label>
        <input type="number" id="anios_trabajando" name="anios_trabajando" required>
        <br>
        <input type="submit" value="Mostrar Información">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = $_POST["nombre"];
        $salario = $_POST["salario"];
        $anios_trabajando = $_POST["anios_trabajando"];

        echo "El Señor $nombre, Cuenta con un salario de: $$salario; y lleva trabajando para nosotros $años_trabajando años";
    }
    ?>
</body>
</html>
