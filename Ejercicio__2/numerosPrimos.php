<?php
function esPrimo($numero) {
    // Los números menores que 2 no son primos
    if ($numero < 2) {
        return false;
    }

    // Verificar si el número es divisible por algún número entre 2 y la raíz cuadrada del número
    for ($i = 2; $i <= sqrt($numero); $i++) {
        if ($numero % $i == 0) {
            return false;
        }
    }

    // Si no se encontró ningún divisor, el número es primo
    return true;
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado de Verificación</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h2 class="mt-5">Resultado de Verificación</h2>
        <div class="mt-3">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // Obtener el número ingresado por el usuario
                $numero = $_POST["numero"];
                
                if (is_numeric($numero)) {
                    $numero = (int)$numero;
                    if (esPrimo($numero)) {
                        echo "<div class='alert alert-success'>$numero es un número primo.</div>";
                    } else {
                        echo "<div class='alert alert-danger'>$numero no es un número primo.</div>";
                    }
                } else {
                    echo "<div class='alert alert-warning'>Por favor, ingresa un número válido.</div>";
                }
            } else {
                echo "<div class='alert alert-warning'>Por favor, envía el formulario.</div>";
            }
            ?>
            <br>
            <a href="ejercicio__2.html" class="btn btn-secondary">Volver</a>
        </div>
    </div>
    
</body>
</html>
