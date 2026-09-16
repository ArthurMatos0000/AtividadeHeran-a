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
        echo "Nome: " . $this->nome . "<br>";
        echo "Código: " . $this->codigo . "<br>";
        echo "Preço: R$ " . $this->preco . "<br>";
        echo "Marca: " . $this->marca . "<br>";
        echo "Categoria: " . $this->categoria . "<br>";
        echo "Descrição: " . $this->descricao . "<br>";
        echo "Quantidade em estoque: " . $this->quantidadeEstoque . "<br>";
        echo "Peso: " . $this->peso . "<br>";
        echo "Fornecedor: " . $this->fornecedor . "<br>";
        echo "Status do produto: " . $this->statusProduto . "<br>";
    }
}