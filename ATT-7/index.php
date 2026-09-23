<?php

include_once "Veiculo.php";
include_once "Carro.php";
include_once "Onibus.php";
include_once "Garagem.php";

// CARRO
$carro = new Carro();

$carro->cadastrarVeiculo("XLM8877", "Civic");
$carro->marca = "Honda";
$carro->ano = 2023;
$carro->cor = "Preto";
$carro->velocidadeAtual = 0;
$carro->combustivel = 30;
$carro->quilometragem = 15000;
$carro->statusVeiculo = "Ativo";
$carro->motoristaAtual = "Sandro";

$carro->quantidadePortas = 4;
$carro->tipoCambio = "Automático";
$carro->capacidadePortaMalas = "450 Kilos";
$carro->quantidadePassageiros = 5;
$carro->arCondicionado = "Sim";
$carro->tipoDirecao = "Elétrica";
$carro->seguroAtivo = "Sim";
$carro->categoriaCarro = "Particular";
$carro->consumoMedio = 12;
$carro->usoAtual = "Particular";


// ÔNIBUS
$onibus = new Onibus();

$onibus->cadastrarVeiculo("AWE3277", "Marcopolo Torino");
$onibus->marca = "Mercedes-Benz";
$onibus->ano = 2022;
$onibus->cor = "Azul";
$onibus->velocidadeAtual = 0;
$onibus->combustivel = 100;
$onibus->quilometragem = 85000;
$onibus->statusVeiculo = "Ativo";
$onibus->motoristaAtual = "João";

$onibus->numeroLinha = "B55";
$onibus->capacidadePassageiros = 50;
$onibus->passageirosAtuais = 20;
$onibus->possuiAcessibilidade = "Sim";
$onibus->itinerario = "Centro - Terminal";
$onibus->nomeMotorista = "João";
$onibus->horarioSaida = "06:00";
$onibus->horarioChegada = "22:00";
$onibus->empresaResponsavel = "Transportes Brasil";
$onibus->quantidadeParadas = 25;


// GARAGEM
$garagem = new Garagem();

$garagem->nomeGaragem = "Garagem Central";
$garagem->codigoGaragem = "Guardar1";
$garagem->endereco = "Avenida Principal, 100";
$garagem->cidade = "Fortaleza";
$garagem->responsavel = "Daniel Petenon";
$garagem->capacidadeMaxima = 10;
$garagem->quantidadeAtual = 0;
$garagem->telefone = "93211-2233";
$garagem->statusGaragem = "Ativa";


// ADICIONANDO OS VEÍCULOS
$garagem->adicionarVeiculo($carro);
$garagem->adicionarVeiculo($onibus);


// ACELERANDO O CARRO
$carro->acelerar(60);


// EXIBIÇÃO
echo "<h2>Veículos da Garagem</h2>";

$garagem->exibirDadosGaragem();

echo "<hr>";

echo "<h3>Dados do Carro</h3>";
$carro->exibirDadosCarro();

echo "<hr>";

echo "<h3>Dados do Ônibus</h3>";
$onibus->exibirDadosOnibus();

?>