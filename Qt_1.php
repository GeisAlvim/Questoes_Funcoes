<?php

function coletarProdutos() {
    $produtos = [];
    for ($i = 0; $i < 5; $i++) {
        $nome = readline("Digite o nome do produto: ");
        $preco = floatval(readline("Digite o preço do $nome: R$ "));
        $produtos[] = ['nome' => $nome, 'preco' => $preco];
    }
    return $produtos;
}

function contarProdutosInferiores($produtos, $limite) {
    $contagem = 0;
    foreach ($produtos as $produto) {
        if ($produto['preco'] < $limite) {
            $contagem++;
        }
    }
    return $contagem;
}

function produtosEntrePreco($produtos, $limiteInferior, $limiteSuperior) {
    $nomes = [];
    foreach ($produtos as $produto) {
        if ($produto['preco'] >= $limiteInferior && $produto['preco'] <= $limiteSuperior) {
            $nomes[] = $produto['nome'];
        }
    }
    return $nomes;
}

function mediaPrecosSuperiores($produtos, $limite) {
    $soma = 0;
    $contagem = 0;
    foreach ($produtos as $produto) {
        if ($produto['preco'] > $limite) {
            $soma += $produto['preco'];
            $contagem++;
        }
    }
    return $contagem > 0 ? $soma / $contagem : 0;
}

function main() {
    $produtos = coletarProdutos();
    
    // a. Quantidade de produtos com preço inferior a R$50,00
    $qtdInferiores = contarProdutosInferiores($produtos, 50);
    echo "\na. Quantidade de produtos com preço inferior a R$50,00: $qtdInferiores";

    // b. Nome dos produtos com preço entre R$50,00 e R$100,00
    $nomesEntre = produtosEntrePreco($produtos, 50, 100);
    echo "\nb. Produtos com preço entre R$50,00 e R$100,00: " . implode(", ", $nomesEntre);

    // c. Média dos preços dos produtos com preço superior a R$100,00
    $mediaSuperiores = mediaPrecosSuperiores($produtos, 100);
    echo "\nc. Média dos preços dos produtos com preço superior a R$100,00: R$ " . number_format($mediaSuperiores, 2, ',', '.');
}

// Chama a função principal
main();

?>