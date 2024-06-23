<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Aumento de Sueldo</title>
</head>
<body>
    <form method="post" action="">
        <label for="sueldo">Ingrese su sueldo:</label>
        <input type="number" id="sueldo" name="sueldo" required>
        <br>
        <input type="submit" value="Calcular Aumento">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $sueldo = $_POST["sueldo"];

        if ($sueldo >= 320000 && $sueldo <= 500000) {
            $aumento = $sueldo * 0.05;
        } elseif ($sueldo < 320000) {
            $aumento = $sueldo * 0.08;
        } else {
            $aumento = 0;
        }
        $nuevo_sueldo = $sueldo + $aumento;

        echo "Su sueldo es: $$sueldo y su aumento es: $$nuevo_sueldo";
    }
    ?>
</body>
</html>
