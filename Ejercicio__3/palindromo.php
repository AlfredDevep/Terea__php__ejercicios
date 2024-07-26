<?php

/** Palabras palíndromas
 *  Oso
    Luzul
    Arenera
    Menem
    Aibofobia 
    Civic
    salas
    solos
    radar


 */     

function esPalindromo($cadena)
{
    // Convertir a minúsculas
    $cadena = strtolower($cadena);
    // Eliminar caracteres no alfabéticos y espacios en blanco
    $cadena = preg_replace('/[^a-z]/', '', $cadena);
    // Verificar si la cadena es igual a su reverso
    return $cadena === strrev($cadena);
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado de Verificación de Palíndromo</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <h2 class="mt-5">Resultado de Verificación de Palíndromo</h2>
        <div class="mt-3">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $cadena = $_POST["cadena"];

                if (!empty($cadena)) {
                    if (esPalindromo($cadena)) {
                        echo "<div class='alert alert-success'>\"$cadena\" es un palíndromo.</div>";
                    } else {
                        echo "<div class='alert alert-danger'>\"$cadena\" no es un palíndromo.</div>";
                    }
                } else {
                    echo "<div class='alert alert-warning'>Por favor, ingresa una cadena de texto válida.</div>";
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