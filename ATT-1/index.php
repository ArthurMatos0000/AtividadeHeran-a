<?php

// Incluindo os arquivos das classes

include_once 'pessoa.php';
include_once 'aluno.php';
include_once 'professor.php';
include_once 'turma.php';


// Criando a turma Betinhas

$turmaBetinhas = new Turma();

$turmaBetinhas->nomeTurma = "Betinhas";
$turmaBetinhas->codigoTurma = "Betas";
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
$professor->telefone = "(51) 96767-6767";
$professor->email = "sahur@example.com";
$professor->endereco = "Segredo";
$professor->cidade = "Esteio";
$professor->estado = "RS";
$professor->dataNascimento = "06/07/67";
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

$aluno1->email = "teixeira@example.com";
$aluno1->telefone = "(51) 98765-4321";
$aluno1->cidade = "Eldorado";
$aluno1->estado = "RS";
$aluno1->endereco = "Casas Maria";
$aluno1->statusPessoa = "Ativo";
$aluno1->dataNascimento = "20/05/10";
$aluno1->cpf = "123.456.789-00";
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

$aluno2->email = "hitter@example.com";
$aluno2->telefone = "(51) 91123-4556";
$aluno2->cidade = "Sapucaia";
$aluno2->estado = "RS";
$aluno2->endereco = "Minima ideia";
$aluno2->statusPessoa = "Inativo";
$aluno2->dataNascimento = "03/07/09";
$aluno2->cpf = "234.567.890-10";
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

$aluno3->email = "lucas@example.com";
$aluno3->telefone = "(51) 98887-2234";
$aluno3->cidade = "Mathias Velho";
$aluno3->estado = "RS";
$aluno3->endereco = "Por ai";
$aluno3->statusPessoa = "Ativo";
$aluno3->dataNascimento = "23/06/09";
$aluno3->cpf = "345.567.890-10";
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

$aluno4->email = "mauro@example.com";
$aluno4->telefone = "(51) 96665-9984";
$aluno4->cidade = "Eldorado";
$aluno4->estado = "RS";
$aluno4->endereco = "Na esquina";
$aluno4->statusPessoa = "Ativo";
$aluno4->dataNascimento = "08/02/10";
$aluno4->cpf = "456.678.890-10";
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