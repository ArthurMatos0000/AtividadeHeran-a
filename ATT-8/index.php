<?php

include_once "Pessoa.php";
include_once "Jogador.php";
include_once "Tecnico.php";
include_once "Time.php";

// TÉCNICO
$tecnico = new Tecnico();

$tecnico->cadastrarPessoa("Bruno Correa", 45);
$tecnico->CPF = "123.456.789-00";
$tecnico->cidade = "Porto Alegre";
$tecnico->estado = "RS";
$tecnico->telefone = "92899-3232";
$tecnico->email = "bruno@email.com";
$tecnico->dataNascimento = "10/05/1981";
$tecnico->nacionalidade = "Brasileiro";
$tecnico->statusPessoa = "Ativo";

$tecnico->registroTecnico = "TecInsano";
$tecnico->estrategia = "Jogo ofensivo";
$tecnico->anosExperiencia = 15;
$tecnico->titulosConquistados = [];
$tecnico->salario = 10000;
$tecnico->estiloJogo = "Posse de bola";
$tecnico->auxiliarTecnico = "Bárbara Dias";
$tecnico->formacaoPreferida = "4-3-3";
$tecnico->jogosComandados = 0;
$tecnico->statusTecnico = "Ativo";

$tecnico->adicionarTitulo("Campeonato Aurélico");


// JOGADOR 1
$jogador1 = new Jogador();

$jogador1->cadastrarPessoa("Konrad Gabriel", 17);
$jogador1->CPF = "333.231.231-21";
$jogador1->cidade = "Eldorado";
$jogador1->estado = "RS";
$jogador1->telefone = "98888-1111";
$jogador1->email = "konrad@email.com";
$jogador1->dataNascimento = "15/02/2009";
$jogador1->nacionalidade = "Brasileiro";
$jogador1->statusPessoa = "Ativo";

$jogador1->numeroCamisa = 10;
$jogador1->posicao = "Meia";
$jogador1->gols = 0;
$jogador1->assistencias = 0;
$jogador1->cartoesAmarelos = 0;
$jogador1->cartoesVermelhos = 0;
$jogador1->partidasJogadas = 0;
$jogador1->altura = 1.78;
$jogador1->peso = 72;
$jogador1->statusJogador = "Ativo";


// JOGADOR 2
$jogador2 = new Jogador();

$jogador2->cadastrarPessoa("Pedro Henrique", 17);
$jogador2->CPF = "865.364.332-21";
$jogador2->cidade = "Porto Alegre";
$jogador2->estado = "ES";
$jogador2->telefone = "92448-2922";
$jogador2->email = "pedro@email.com";
$jogador2->dataNascimento = "20/08/2009";
$jogador2->nacionalidade = "Brasileiro";
$jogador2->statusPessoa = "Ativo";

$jogador2->numeroCamisa = 9;
$jogador2->posicao = "Atacante";
$jogador2->gols = 0;
$jogador2->assistencias = 0;
$jogador2->cartoesAmarelos = 0;
$jogador2->cartoesVermelhos = 0;
$jogador2->partidasJogadas = 0;
$jogador2->altura = 1.82;
$jogador2->peso = 78;
$jogador2->statusJogador = "Ativo";


// JOGADOR 3
$jogador3 = new Jogador();

$jogador3->cadastrarPessoa("Lucas Amaro", 17);
$jogador3->CPF = "999.378.321-22";
$jogador3->cidade = "Mathias Velhos";
$jogador3->estado = "RS";
$jogador3->telefone = "98888-3333";
$jogador3->email = "lucas@email.com";
$jogador3->dataNascimento = "05/11/2009";
$jogador3->nacionalidade = "Brasileiro";
$jogador3->statusPessoa = "Ativo";

$jogador3->numeroCamisa = 5;
$jogador3->posicao = "Volante";
$jogador3->gols = 0;
$jogador3->assistencias = 0;
$jogador3->cartoesAmarelos = 0;
$jogador3->cartoesVermelhos = 0;
$jogador3->partidasJogadas = 0;
$jogador3->altura = 1.80;
$jogador3->peso = 75;
$jogador3->statusJogador = "Ativo";


// TIME
$time = new Time();

$time->nomeTime = "Senac FC";
$time->cidadeTime = "Porto Alegre";
$time->estadoTime = "RS";
$time->quantidadeJogadores = 0;
$time->estadio = "Arena Central";
$time->pontos = 0;
$time->vitorias = 0;
$time->derrotas = 0;


// CONECTANDO TÉCNICO E JOGADORES
$time->definirTecnico($tecnico);

$time->adicionarJogador($jogador1);
$time->adicionarJogador($jogador2);
$time->adicionarJogador($jogador3);


// REGISTRANDO GOLS
$jogador1->marcarGol(2);
$jogador2->marcarGol(1);
$jogador3->marcarGol(1);


// MOSTRANDO OS DADOS
echo "<h2>Dados do Time</h2>";
$time->exibirDadosTime();

echo "<hr>";

echo "<h3>Dados do Técnico</h3>";
$tecnico->exibirDadosTecnico();

echo "<hr>";

echo "<h3>Dados dos Jogadores</h3>";

echo "<b>Jogador 1:</b><br>";
$jogador1->exibirDadosJogador();

echo "<br>";

echo "<b>Jogador 2:</b><br>";
$jogador2->exibirDadosJogador();

echo "<br>";

echo "<b>Jogador 3:</b><br>";
$jogador3->exibirDadosJogador();

?>