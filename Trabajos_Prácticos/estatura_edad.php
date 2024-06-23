<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Verificación de Edad y Estatura</title>
</head>
<body>
    <form method="post" action="">
        <label for="edad">Ingrese su edad:</label>
        <input type="number" id="edad" name="edad" required>
        <br>
        <label for="estatura">Ingrese su estatura en centímetros:</label>
        <input type="number" id="estatura" name="estatura" required>
        <br>
        <input type="submit" value="Verificar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $edad = $_POST["edad"];
        $estatura = $_POST["estatura"];

        if ($edad >= 18) {
            if ($estatura <= 170) {
                echo "Es mayor de edad y puede ingresar a la montaña rusa";
            } else {
                echo "Es mayor de edad pero no puede ingresar a la montaña rusa";
            }
        } else {
            echo "Es menor de edad";
        }
    }
    ?>
</body>
</html>
