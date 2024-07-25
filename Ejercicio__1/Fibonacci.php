<?php

/**
     * 
     * Problema de la serie Fibonacci:
        Escribe una función llamada generar Fibonacci que reciba
         un número n como parámetro y genere los primeros n términos 
         de la serie Fibonacci. La serie comienza con 0 y 1, y cada término 
         subsiguiente es la suma de los dos anteriores.
     */

function generarFibonacci($n) {
    if ($n <= 0) {
        return [];
    } elseif ($n == 1) {
        return [0];
    }

    $fibonacci = [0, 1];
    for ($i = 2; $i < $n; $i++) {
        $fibonacci[$i] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
    }
    return $fibonacci;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado de la Serie Fibonacci</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h2 class="mt-5">Resultado de la Serie Fibonacci</h2>
        <div class="mt-3">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $numero = $_POST["numero"];
                
                if (is_numeric($numero) && $numero >= 0) {
                    $numero = (int)$numero;
                    $fibonacci = generarFibonacci($numero);
                    echo "<div class='alert alert-success'>Primeros $numero términos de la serie Fibonacci: " . implode(", ", $fibonacci) . "</div>";
                } else {
                    echo "<div class='alert alert-warning'>Por favor, ingresa un número válido.</div>";
                }
            } else {
                echo "<div class='alert alert-warning'>Por favor, envía el formulario.</div>";
            }
            ?>
            <br>
            <a href="index.html" class="btn btn-secondary">Volver</a>
        </div>
    </div>

</body>
</html>

 
 

