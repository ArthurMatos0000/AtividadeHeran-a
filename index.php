<?php

// Incluindo os arquivos das classes

include_once './classes/Pessoa.php';
include_once './classes/Aluno.php';
include_once './classes/Professor.php';
include_once './classes/Turma.php';


// Criando a turma Betinhas

$turmaBetinhas = new Turma();

$turmaBetinhas->nomeTurma = "Betinhas";
$turmaBetinhas->codigoTurma = "BET001";
$turmaBetinhas->anoLetivo = 2026;
$turmaBetinhas->sala = "Sala 10";
$turmaBetinhas->turno = "Manhã";
$turmaBetinhas->limiteAlunos = 30;
$turmaBetinhas->curso = "Ensino Médio";
$turmaBetinhas->statusTurma = "Ativa";


// Criando o professor

$professor = new Professor();

$professor->cadastrarPessoa(
    "Tung Tung Sahur",
    67,
    "676.676.676-67"
);

$professor->disciplina = "Aura";
$professor->registroProfessor = "PROF001";
$professor->cargaHoraria = "67 horas";
$professor->salario = 6700;
$professor->formacao = "Licenciatura em farmarAura";
$professor->especialidade = "SixSeeven";
$professor->horarioAula = "06:00 - 07:00";
$professor->anoContratacao = 2067;
$professor->statusProfessor = "Ativo";


// Colocando o professor na turma

$turmaBetinhas->definirProfessor($professor);


// Criando o primeiro aluno

$aluno1 = new Aluno();

$aluno1->cadastrarPessoa(
    "Teixeira Teixeira",
    16,
    "123.456.789-00"
);

$aluno1->matricula = "2026001";
$aluno1->serie = "2º Ano";
$aluno1->nota1 = 1;
$aluno1->nota2 = 2;
$aluno1->nota3 = 3;
$aluno1->situacao = "Em recuperação";
$aluno1->responsavel = "Kely Teixeira";
$aluno1->dataMatricula = "10/02/2026";

$aluno1->calcularMedia();


// Criando o segundo aluno

$aluno2 = new Aluno();

$aluno2->cadastrarPessoa(
    "Pedro Hitter",
    17,
    "234.567.890-11"
);

$aluno2->matricula = "2026002";
$aluno2->serie = "2º Ano";
$aluno2->nota1 = 1;
$aluno2->nota2 = 2;
$aluno2->nota3 = 3;
$aluno2->situacao = "Em recuperação";
$aluno2->responsavel = "José Santos";
$aluno2->dataMatricula = "10/02/2026";

$aluno2->calcularMedia();


// Criando o terceiro aluno

$aluno3 = new Aluno();

$aluno3->cadastrarPessoa(
    "Lucas Amaro",
    17,
    "345.678.901-22"
);

$aluno3->matricula = "2026003";
$aluno3->serie = "2º Ano";
$aluno3->nota1 = 1;
$aluno3->nota2 = 2;
$aluno3->nota3 = 3;
$aluno3->situacao = "Em recuperação";
$aluno3->responsavel = "Enio Amaro";
$aluno3->dataMatricula = "10/02/2026";

$aluno3->calcularMedia();

// Adicionando aluno

$aluno4 = new Aluno();

$aluno4->cadastrarPessoa(
    "Mauricio",
    17,
    "456.789.012-33"
);

$aluno4->matricula = "2026004";
$aluno4->serie = "2º Ano";
$aluno4->nota1 = 1;
$aluno4->nota2 = 2;
$aluno4->nota3 = 3;
$aluno4->situacao = "Em recuperação";
$aluno4->responsavel = "Beatrice Deus";
$aluno4->dataMatricula = "10/02/2026";

$aluno4->calcularMedia();


// Adicionando os alunos a turma Betinhas

$turmaBetinhas->adicionarAluno($aluno1);
$turmaBetinhas->adicionarAluno($aluno2);
$turmaBetinhas->adicionarAluno($aluno3);
$turmaBetinhas->adicionarAluno($aluno4);


// Exibindo os dados da turma

$turmaBetinhas->exibirDadosTurma();

echo "<hr>";

$professor->exibirDadosProfessor();

// Exibindo os dados dos alunos

echo "<hr>";

$aluno1->exibirDadosAluno();

echo "<hr>";

$aluno2->exibirDadosAluno();

echo "<hr>";

$aluno3->exibirDadosAluno();

echo "<hr>";

$aluno4->exibirDadosAluno();


?>