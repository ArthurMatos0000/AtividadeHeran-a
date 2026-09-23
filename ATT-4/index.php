<?php

include_once "Pessoa.php";
include_once "AlunoOnline.php";
include_once "Instrutor.php";
include_once "CursoOnline.php";


// INSTRUTOR

$instrutor = new Instrutor();

$instrutor->cadastrarPessoa("Tripa Tropa", "tt@email.com");
$instrutor->idade = 35;
$instrutor->CPF = "123.456.789-00";
$instrutor->telefone = "99999-1111";
$instrutor->endereco = "Rua Central";
$instrutor->cidade = "Fortaleza";
$instrutor->estado = "CE";
$instrutor->dataNascimento = "10/05/1991";
$instrutor->usuarioAtivo = "Sim";

$instrutor->codigoInstrutor = "Instrut";
$instrutor->areaAtuacao[] = "Programação";
$instrutor->formacao = "Análise e Desenvolvimento de Sistemas";
$instrutor->avaliacaoMedia = 4.8;
$instrutor->biografia = "Instrutor de programação.";
$instrutor->anosExperiencia = 8;
$instrutor->redeSocial = "@carlosdev";
$instrutor->valorHora = 80;
$instrutor->statusInstrutor = "Ativo";


// ALUNOS

$aluno1 = new AlunoOnline();
$aluno1->cadastrarPessoa("Daniel Ciarlini", "ciarlini@email.com");
$aluno1->matricula = "AL001";
$aluno1->planoAssinatura = "Premium";
$aluno1->nivelConhecimento = "Iniciante";
$aluno1->statusAluno = "Ativo";

$aluno2 = new AlunoOnline();
$aluno2->cadastrarPessoa("Sandro Martins", "sandro@email.com");
$aluno2->matricula = "AL002";
$aluno2->planoAssinatura = "Premium";
$aluno2->nivelConhecimento = "Intermediário";
$aluno2->statusAluno = "Ativo";

$aluno3 = new AlunoOnline();
$aluno3->cadastrarPessoa("Pedro Machado", "pedro@email.com");
$aluno3->matricula = "AL003";
$aluno3->planoAssinatura = "Básico";
$aluno3->nivelConhecimento = "Iniciante";
$aluno3->statusAluno = "Ativo";


// CURSO

$curso = new CursoOnline();

$curso->titulo = "Introdução à resenha";
$curso->codigoCurso = "Curso1";
$curso->descricao = "Curso básico de resenha.";
$curso->cargaHoraria = "40 horas";
$curso->nivel = "Iniciante";
$curso->quantidadeAulas = 0;
$curso->preco = 1.9990;
$curso->statusCurso = "Ativo";

// DEFINIR INSTRUTOR

$curso->definirInstrutor($instrutor);


// ADICIONAR ALUNOS

$curso->adicionarAluno($aluno1);
$curso->adicionarAluno($aluno2);
$curso->adicionarAluno($aluno3);


// INSCRIÇÃO DOS ALUNOS

$aluno1->inscreverEmCurso($curso->titulo);
$aluno2->inscreverEmCurso($curso->titulo);
$aluno3->inscreverEmCurso($curso->titulo);


// EXIBIR DADOS

echo "<h2>Curso Online</h2>";

$curso->exibirDadosCurso();
?>