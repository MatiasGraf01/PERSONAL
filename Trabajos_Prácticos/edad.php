<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>mayor de edad</title>
</head>
<body>
    <form method="post" action="">
        <label for="edad">Ingrese su edad:</label>
        <input type="number" id="edad" name="edad" required>
        <input type="submit" value="Verificar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
        $edad = $_POST["edad"];

        if ($edad >= 18) {
            echo "Es mayor de edad";
        } else {
            echo "Es menor de edad";
        }
    }
    ?>
</body>
</html>
