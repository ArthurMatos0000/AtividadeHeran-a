<?php

include_once "ProdutoCardapio.php";
include_once "Prato.php";
include_once "Bebida.php";
include_once "PedidoRestaurante.php";


// PRATO

$prato = new Prato();

$prato->cadastrarProduto("Hambúrguer Artesanal", 25.00);

$prato->codigo = "Comer1";
$prato->descricao = "Hambúrguer artesanal com queijo.";
$prato->categoria = "Lanche";
$prato->tempoPreparo = "20 minutos";
$prato->disponivel = "Sim";
$prato->ingredientesBase = "Pão, carne e queijo";
$prato->imagem = "hamburguer.jpg";
$prato->quantidadeVendida = 0;

$prato->tipoPrato = "Hambúrguer";
$prato->tamanhoPorcao = "Grande";
$prato->nivelPimenta = "Sem pimenta";
$prato->contemGluten = "Sim";
$prato->contemLactose = "Sim";
$prato->calorias = 650;
$prato->acompanhamento = "Batata frita";
$prato->chefResponsavel = "Chef Carlos";
$prato->promocaoAtiva = "Não";

$prato->adicionarIngrediente("Carne");
$prato->adicionarIngrediente("Queijo");
$prato->adicionarIngrediente("Alface");


// BEBIDA

$bebida = new Bebida();

$bebida->cadastrarProduto("Refrigerante", 8.00);

$bebida->codigo = "Beber1";
$bebida->descricao = "Refrigerante gelado.";
$bebida->categoria = "Bebida";
$bebida->tempoPreparo = "2 minutos";
$bebida->disponivel = "Sim";
$bebida->ingredientesBase = "Água, açúcar e gás";
$bebida->imagem = "refrigerante.jpg";
$bebida->quantidadeVendida = 0;

$bebida->volumeMl = 350;
$bebida->tipoBebida = "Refrigerante";
$bebida->temperatura = "Gelada";
$bebida->contemAcucar = "Sim";
$bebida->contemGas = "Sim";
$bebida->marca = "Coca-Cola";
$bebida->validade = "12/2026";
$bebida->embalagem = "Lata";
$bebida->sabor = "Cola";
$bebida->teorAlcoolico = "0%";


// PEDIDO

$pedido = new PedidoRestaurante();

$pedido->codigoPedido = "Pedido1";
$pedido->nomeCliente = "Matos";
$pedido->mesa = 5;
$pedido->statusPedido = "Em preparo";
$pedido->formaPagamento = "Cartão";
$pedido->dataPedido = "18/09/2026";
$pedido->observacoes = "Sem cebola";
$pedido->taxaServico = 3.00;


// ADICIONAR ITENS

$pedido->adicionarItem($prato);
$pedido->adicionarItem($bebida);


// CALCULAR TOTAL

$pedido->calcularTotal();


// EXIBIR RESUMO

echo "<h2>Resumo do Pedido</h2>";

$pedido->exibirResumoPedido();

?>