<?php

include_once __DIR__ . "/Produto.php";
include_once __DIR__ . "/LivroProduto.php";
include_once __DIR__ . "/Eletronico.php";
include_once __DIR__ . "/CarrinhoCompra.php";


// ==========================
// LIVRO
// ==========================

$livro = new LivroProduto();

$livro->cadastrarProduto("Koe ga Kasanaru Made", "LIV001", 50);

$livro->marca = "Panini";
$livro->categoria = "Escolar";
$livro->descricao = "Manga escolar.";
$livro->quantidadeEstoque = 100;
$livro->peso = "500g";
$livro->fornecedor = "Rowd 2";
$livro->statusProduto = "Ativo";

$livro->definirAutor("Arthur.M");
$livro->alterarEditora("Panini");
$livro->ISBN = "288667188371";
$livro->alterarGenero("Escolar");
$livro->numeroPaginas = "Em andamento";
$livro->anoLancamento = 2030;
$livro->idioma = "Português";
$livro->tipoCapa = "Dura";
$livro->informarFaixaEtaria("Livre");
$livro->atualizarSinopse("Terras dos brainrots.");


// ==========================
// ELETRÔNICO
// ==========================

$eletronico = new Eletronico();

$eletronico->cadastrarProduto("Notebook", "Ele1", 3000);

$eletronico->marca = "Acer";
$eletronico->categoria = "Informática";
$eletronico->descricao = "Notebook para estudos e trabalho.";
$eletronico->quantidadeEstoque = 5;
$eletronico->peso = "1,5 kg";
$eletronico->fornecedor = "Acer Brasil";
$eletronico->statusProduto = "Ativo";

$eletronico->modelo = "Aspire 5";
$eletronico->alterarVoltagem("110V");
$eletronico->definirGarantia(12);
$eletronico->numeroSerie = "ACER001";
$eletronico->cor = "Preto";
$eletronico->atualizarCapacidade("512 GB SSD");
$eletronico->sistemaOperacional = "Windows";
$eletronico->consumoEnergia = "45W";
$eletronico->informarAcessorios("Carregador e manual");
$eletronico->assistenciaTecnica = "Assistência Acer";


// ==========================
// DESCONTO
// ==========================

$livro->aplicarDesconto(10);


// ==========================
// CARRINHO
// ==========================

$carrinho = new CarrinhoCompra();

$carrinho->codigoCarrinho = "Car1";
$carrinho->cliente = "Mauricio";
$carrinho->statusCarrinho = "Aberto";
$carrinho->dataCriacao = "16/09/2026";
$carrinho->formaPagamento = "Pix";
$carrinho->cupomDesconto = "NENHUM";
$carrinho->valorDesconto = 0;


// ==========================
// ADICIONAR PRODUTOS
// ==========================

$carrinho->adicionarProduto($livro);
$carrinho->adicionarProduto($eletronico);


// ==========================
// EXIBIR LIVRO
// ==========================

echo "<h2>Dados do Livro</h2>";

$livro->exibirDadosLivro();

echo "<hr>";


// ==========================
// EXIBIR ELETRÔNICO
// ==========================

echo "<h2>Dados do Eletrônico</h2>";

$eletronico->exibirDadosEletronico();

echo "<hr>";


// ==========================
// CALCULAR TOTAL
// ==========================

echo "<h2>Total da Compra</h2>";

echo "Total: R$ " . $carrinho->calcularTotal();

echo "<hr>";


// ==========================
// RESUMO DO CARRINHO
// ==========================

$carrinho->exibirResumo();