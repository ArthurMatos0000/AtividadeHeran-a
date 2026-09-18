<?php

class CarrinhoCompra
{
    public $itens = [];
    public $quantidadeItens = 0;
    public $valorTotal = 0;
    public $statusCarrinho;
    public $dataCriacao;
    public $cliente;
    public $formaPagamento;
    public $cupomDesconto;
    public $valorDesconto;
    public $codigoCarrinho;

    public function adicionarProduto($produto)
    {
        $this->itens[] = $produto;
        $this->quantidadeItens++;
    }

    public function removerProduto($produto)
    {
        foreach ($this->itens as $chave => $item) {

            if ($item == $produto) {

                unset($this->itens[$chave]);

                $this->itens = array_values($this->itens);

                $this->quantidadeItens--;

                break;
            }
        }
    }

    public function calcularTotal()
    {
        $this->valorTotal = 0;

        foreach ($this->itens as $item) {

            $this->valorTotal += $item->preco;

        }

        return $this->valorTotal;
    }

    public function aplicarCupom($valor)
    {
        $this->valorDesconto = $valor;
    }

    public function esvaziarCarrinho()
    {
        $this->itens = [];
        $this->quantidadeItens = 0;
        $this->valorTotal = 0;
    }

    public function exibirResumo()
    {
        echo "<h2>Carrinho de Compras</h2>";

        echo "<b>Cliente: </b>" . $this->cliente . "<br>";
        echo "<b>Quantidade de itens: </b>" . $this->quantidadeItens . "<br>";

        echo "<h3>Produtos:</h3>";

        foreach ($this->itens as $item) {

            echo $item->nome . " - R$ " . $item->preco . "<br>";

        }

        echo "<br>";

        echo "<b>Valor total: R$ </b> " . $this->calcularTotal() . "<br>";
    }
}