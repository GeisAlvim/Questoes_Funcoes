<?php

function coletarDadosAlunos() {
    $alunos = [];
    
    for ($i = 0; $i < 10; $i++) {
        $nome = readline("Digite o nome do aluno: ");
        $nota = floatval(readline("Digite a nota do aluno (0 a 10): "));
        
        // Armazena os dados no vetor
        $alunos[] = ['nome' => $nome, 'nota' => $nota];
    }
    
    return $alunos;
}

function calcularMedia($alunos) {
    $somaNotas = 0;
    
    foreach ($alunos as $aluno) {
        $somaNotas += $aluno['nota'];
    }
    
    return $somaNotas / count($alunos);
}

function encontrarMaiorNota($alunos) {
    $maiorNota = 0;
    $alunoMaiorNota = "";
    
    foreach ($alunos as $aluno) {
        if ($aluno['nota'] > $maiorNota) {
            $maiorNota = $aluno['nota'];
            $alunoMaiorNota = $aluno['nome'];
        }
    }
    
    return $alunoMaiorNota;
}

function main() {
    $alunos = coletarDadosAlunos();
    
    // Calcula a média
    $media = calcularMedia($alunos);
    echo "\nA média de notas da classe é: " . number_format($media, 2, ',', '.') . "\n";
    
    // Encontra o aluno com a maior nota
    $alunoMaiorNota = encontrarMaiorNota($alunos);
    echo "O aluno que obteve a maior nota é: " . $alunoMaiorNota . "\n";
}

// Chama a função principal
main();

?>
