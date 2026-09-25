<?php

include_once "Pessoa.php";
include_once "ClienteCinema.php";
include_once "FuncionarioCinema.php";
include_once "SessaoCinema.php";


// CLIENTE 1
$cliente1 = new ClienteCinema();

$cliente1->cadastrarPessoa("Arthur Matos", "222.456.099-00");
$cliente1->idade = 25;
$cliente1->email = "arthur@email.com";
$cliente1->telefone = "9399-1111";
$cliente1->endereco = "Humaita";
$cliente1->cidade = "Porto Alegre";
$cliente1->estado = "RS";
$cliente1->dataNascimento = "15/03/2001";
$cliente1->statusPessoa = "Ativo";

$cliente1->codigoCliente = "Clt";
$cliente1->tipoIngresso = "Meia";
$cliente1->pontosFidelidade = 100;
$cliente1->meiaEntrada = "Sim";
$cliente1->formaPagamento = "Cartão";
$cliente1->assentoEscolhido = "G20";
$cliente1->pipocaComprada = "Sim";
$cliente1->bebidaComprada = "Sim";
$cliente1->statusCliente = "Ativo";


// CLIENTE 2
$cliente2 = new ClienteCinema();

$cliente2->cadastrarPessoa("Maria Santos", "987.654.433-00");
$cliente2->idade = 22;
$cliente2->email = "maria@email.com";
$cliente2->telefone = "98998-3332";
$cliente2->endereco = "Humaita";
$cliente2->cidade = "RS";
$cliente2->estado = "RS";
$cliente2->dataNascimento = "20/08/2004";
$cliente2->statusPessoa = "Ativo";

$cliente2->codigoCliente = "Clt";
$cliente2->tipoIngresso = "Meia";
$cliente2->pontosFidelidade = 50;
$cliente2->meiaEntrada = "Sim";
$cliente2->formaPagamento = "Pix";
$cliente2->assentoEscolhido = "B21";
$cliente2->pipocaComprada = "Não";
$cliente2->bebidaComprada = "Sim";
$cliente2->statusCliente = "Ativo";


// FUNCIONÁRIO
$funcionario = new FuncionarioCinema();

$funcionario->cadastrarPessoa("José da Silva", "456.789.123-00");
$funcionario->idade = 35;
$funcionario->email = "jose@cinema.com";
$funcionario->telefone = "97777-3333";
$funcionario->endereco = "Rua do Cinema";
$funcionario->cidade = "Porto Alegre";
$funcionario->estado = "RS";
$funcionario->dataNascimento = "10/05/1991";
$funcionario->statusPessoa = "Ativo";

$funcionario->codigoFuncionario = "Fnc";
$funcionario->cargo = "Gerente";
$funcionario->turno = "Noite";
$funcionario->salario = 3500;
$funcionario->dataContratacao = "10/01/2020";
$funcionario->setor = "Atendimento";
$funcionario->cracha = "Crt";
$funcionario->supervisor = "Roberto da Silva";
$funcionario->horasTrabalhadas = "8 horas";
$funcionario->statusFuncionario = "Ativo";


// SESSÃO
$sessao = new SessaoCinema();

$sessao->codigoSessao = "Ses1";
$sessao->tituloFilme = "Aventura Fatal";
$sessao->sala = "Sala 03";
$sessao->horario = "19:30";
$sessao->dataSessao = "25/09/2026";
$sessao->capacidadeSala = 100;
$sessao->valorIngresso = 25.00;
$sessao->statusSessao = "Em andamento";


// ADICIONANDO CLIENTES
$sessao->adicionarCliente($cliente1);
$sessao->adicionarCliente($cliente2);


// DEFININDO FUNCIONÁRIO
$sessao->definirFuncionario($funcionario);


// EXIBIÇÃO
echo "<h2>Dados da Sessão</h2>";
$sessao->exibirDadosSessao();

echo "<hr>";

echo "<h3>Lotação da Sala</h3>";
echo "<b>Lotação: </b>" . $sessao->verificarLotacao() . "<br>";

echo "<hr>";

echo "<h3>Dados do Cliente 1</h3>";
$cliente1->exibirDadosCliente();

echo "<hr>";

echo "<h3>Dados do Cliente 2</h3>";
$cliente2->exibirDadosCliente();

echo "<hr>";

echo "<h3>Dados do Funcionário</h3>";
$funcionario->exibirDadosFuncionario();

?>