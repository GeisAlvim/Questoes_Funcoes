<?php

function coletarNumeros() {
    $numeros = [];
    
    for ($i = 0; $i < 10; $i++) {
        $numero = intval(readline("Digite o número " . ($i + 1) . ": "));
        $numeros[] = $numero;
    }
    
    return $numeros;
}

function contarNumeros($numeros) {
    $negativos = 0;
    $positivos = 0;
    $pares = 0;
    $impares = 0;

    foreach ($numeros as $numero) {
        if ($numero < 0) {
            $negativos++;
        } elseif ($numero > 0) {
            $positivos++;
        }

        if ($numero % 2 == 0) {
            $pares++;
        } else {
            $impares++;
        }
    }

    return [
        'negativos' => $negativos,
        'positivos' => $positivos,
        'pares' => $pares,
        'impares' => $impares
    ];
}

function main() {
    $numeros = coletarNumeros();
    $contagem = contarNumeros($numeros);
    
    echo "\nQuantidade de negativos: " . $contagem['negativos'] . "\n";
    echo "Quantidade de positivos: " . $contagem['positivos'] . "\n";
    echo "Quantidade de pares: " . $contagem['pares'] . "\n";
    echo "Quantidade de ímpares: " . $contagem['impares'] . "\n";
}

// Chama a função principal
main();

?>
