<?php

class ProdutoCardapio
{
    public $nome;
    public $codigo;
    public $preco;
    public $descricao;
    public $categoria;
    public $tempoPreparo;
    public $disponivel;
    public $ingredientesBase;
    public $imagem;
    public $quantidadeVendida;

    public function cadastrarProduto($nome, $preco)
    {
        $this->nome = $nome;
        $this->preco = $preco;
    }

    public function alterarPreco($preco)
    {
        $this->preco = $preco;
    }

    public function alterarDescricao($descricao)
    {
        $this->descricao = $descricao;
    }

    public function mudarDisponibilidade($status)
    {
        $this->disponivel = $status;
    }

    public function atualizarTempoPreparo($tempo)
    {
        $this->tempoPreparo = $tempo;
    }

    public function exibirDadosProduto()
    {
        echo "Nome: " . $this->nome . "<br>";
        echo "Código: " . $this->codigo . "<br>";
        echo "Preço: R$ " . $this->preco . "<br>";
        echo "Descrição: " . $this->descricao . "<br>";
        echo "Categoria: " . $this->categoria . "<br>";
        echo "Tempo de preparo: " . $this->tempoPreparo . "<br>";
        echo "Disponível: " . $this->disponivel . "<br>";
        echo "Ingredientes base: " . $this->ingredientesBase . "<br>";
        echo "Imagem: " . $this->imagem . "<br>";
        echo "Quantidade vendida: " . $this->quantidadeVendida . "<br>";
    }
}