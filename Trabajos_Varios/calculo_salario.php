<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo de Salario</title>
</head>
<body>
    <h1>Cálculo de Salario</h1>
    <form method="post" action="">
        <label for="horas">Horas trabajadas:</label>
        <input type="number" id="horas" name="horas" required>
        <input type="submit" value="Calcular">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $horasTrabajadas = $_POST['horas'];
        

        $valorPorHora = 10055;

        $salario = $horasTrabajadas * $valorPorHora;

        echo "<p>El salario es: $" . number_format($salario, 2) . "</p>";
    }
    ?>
</body>
</html>
