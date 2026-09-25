<?php

include_once "Evento.php";
include_once "Palestra.php";
include_once "Oficina.php";
include_once "AgendaEventos.php";


// PALESTRA
$palestra = new Palestra();

$palestra->cadastrarEvento("Palestra sobre Jogos", "10/10/2026");
$palestra->codigoEvento = "EV0JAPAN";
$palestra->horarioInicio = "09:00";
$palestra->horarioFim = "11:00";
$palestra->local = "Auditório Principal";
$palestra->responsavel = "Adalberto Pereira";
$palestra->publicoAlvo = "Alunos do Ensino Médio, Gamers";
$palestra->quantidadeVagas = 100;
$palestra->statusEvento = "Aberto";

$palestra->nomePalestrante = "Adalberto Pereira";
$palestra->tema = "Jogos";
$palestra->miniCurriculo = "Especialista em desenvolvimento de jogos.";
$palestra->recursosNecessarios = [];
$palestra->duracaoMinutos = 120;
$palestra->certificado = "Sim";
$palestra->quantidadeInscritos = 0;
$palestra->materialApoio = "Slides e apostila";
$palestra->linkApresentacao = "www.exemplo.com/palestra";
$palestra->areaConhecimento = "Jogos";

$palestra->adicionarRecurso("Projetor");
$palestra->adicionarRecurso("Computador");
$palestra->adicionarInscrito(30);


// OFICINA
$oficina = new Oficina();

$oficina->cadastrarEvento("Oficina de Jogos", "15/10/2026");
$oficina->codigoEvento = "EV0JAPAN";
$oficina->horarioInicio = "14:00";
$oficina->horarioFim = "17:00";
$oficina->local = "Laboratório de Informática";
$oficina->responsavel = "Sandro Martins";
$oficina->publicoAlvo = "Alunos do Ensino Médio, Gamers";
$oficina->quantidadeVagas = 30;
$oficina->statusEvento = "Aberto";

$oficina->nomeInstrutor = "Sandro Martins";
$oficina->temaPratico = "Introdução aos jogos";
$oficina->materiaisNecessarios = [];
$oficina->numeroComputadores = 30;
$oficina->duracaoMinutos = 180;
$oficina->nivelConhecimento = "Intermediário";
$oficina->atividadeFinal = "Criar um pequeno jogo 2d";
$oficina->quantidadeGrupos = 5;
$oficina->softwareUtilizado = "Visual Studio Code e XAMPP";
$oficina->entregaObrigatoria = "Sim";

$oficina->adicionarMaterial("Computador");
$oficina->adicionarMaterial("Projetor");


// AGENDA
$agenda = new AgendaEventos();

$agenda->nomeAgenda = "Agenda de Eventos de Jogos";
$agenda->codigoAgenda = "AgedaLegal";
$agenda->responsavelAgenda = "Coordenação Profissional";
$agenda->quantidadeEventos = 0;
$agenda->anoLetivo = 2026;
$agenda->escola = "Colégio Senac";
$agenda->cidade = "Porto Alegre";
$agenda->dataCriacao = "01/09/2026";
$agenda->statusAgenda = "Ativa";


// ADICIONANDO OS EVENTOS
$agenda->adicionarEvento($palestra);
$agenda->adicionarEvento($oficina);


// EXIBIÇÃO
echo "<h2>Agenda de Eventos</h2>";

$agenda->exibirDadosAgenda();

echo "<hr>";

echo "<h3>Lista de Eventos</h3>";
$agenda->listarEventos();

echo "<hr>";

echo "<h3>Dados da Palestra</h3>";
$palestra->exibirDadosPalestra();

echo "<hr>";

echo "<h3>Dados da Oficina</h3>";
$oficina->exibirDadosOficina();

?>