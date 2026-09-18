<?php

class Produto
{
    public $nome;
    public $codigo;
    public $preco;
    public $marca;
    public $categoria;
    public $descricao;
    public $quantidadeEstoque;
    public $peso;
    public $fornecedor;
    public $statusProduto;

    public function cadastrarProduto($nome, $codigo, $preco)
    {
        $this->nome = $nome;
        $this->codigo = $codigo;
        $this->preco = $preco;
    }

    public function alterarPreco($novoPreco)
    {
        $this->preco = $novoPreco;
    }

    public function aplicarDesconto($percentual)
    {
        $desconto = $this->preco * ($percentual / 100);
        $this->preco = $this->preco - $desconto;
    }

    public function atualizarEstoque($quantidade)
    {
        $this->quantidadeEstoque = $quantidade;
    }

    public function alterarStatus($novoStatus)
    {
        $this->statusProduto = $novoStatus;
    }

    public function exibirDadosProduto()
    {
echo "<b>Nome: </b>" . $this->nome . "<br>";
echo "<b>Código: </b>" . $this->codigo . "<br>";
echo "<b>Preço: </b>R$ " . $this->preco . "<br>";
echo "<b>Marca: </b>" . $this->marca . "<br>";
echo "<b>Categoria: </b>" . $this->categoria . "<br>";
echo "<b>Descrição: </b>" . $this->descricao . "<br>";
echo "<b>Quantidade em estoque: </b>" . $this->quantidadeEstoque . "<br>";
echo "<b>Peso: </b>" . $this->peso . "<br>";
echo "<b>Fornecedor: </b>" . $this->fornecedor . "<br>";
echo "<b>Status do produto: </b>" . $this->statusProduto . "<br>";
    }
}