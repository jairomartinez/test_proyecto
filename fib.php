<?php

// n es la cnatidad de elementos de la serie fibonacci
$n = $_POST['n'];

// La serie

if ($n > 2) {
    $fib = [1, 1];
    for($i = 2; $i < $n; $i++) {
        $fib[$i] = $fib[$i-1] + $fib[$i-2];
    }
} else {
    // mostrar 1 y 1
}


/**
 * calcular el numero de filas en la tabla
 */

$nf = $n / 10;
echo '<table>';
 for ($fila = 0; $fila < $nf; $fila++ ) {
    echo '<tr>';
    for ($celda = 0; $celda < 10; $celda++) {
        echo '<td>'.$fib[$fila * 10 + $celda]. '</td>';
    }
    echo '</tr>';
 }

echo '</table>';
