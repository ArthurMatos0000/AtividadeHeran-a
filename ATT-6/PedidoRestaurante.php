<?php

class PedidoRestaurante
{
    public $codigoPedido;
    public $nomeCliente;
    public $mesa;
    public $itens = [];
    public $valorTotal;
    public $statusPedido;
    public $formaPagamento;
    public $dataPedido;
    public $observacoes;
    public $taxaServico;

    public function adicionarItem($item)
    {
        $this->itens[] = $item;
    }

    public function removerItem($item)
    {
        foreach ($this->itens as $chave => $itemPedido) {
            if ($itemPedido === $item) {
                unset($this->itens[$chave]);
            }
        }

        $this->itens = array_values($this->itens);
    }

    public function calcularTotal()
    {
        $this->valorTotal = 0;

        foreach ($this->itens as $item) {
            $this->valorTotal += $item->preco;
        }

        $this->valorTotal += $this->taxaServico;

        return $this->valorTotal;
    }

    public function alterarStatus($status)
    {
        $this->statusPedido = $status;
    }

    public function adicionarObservacao($texto)
    {
        $this->observacoes = $texto;
    }

    public function exibirResumoPedido()
    {
        echo "<b>Código do pedido: </b>" . $this->codigoPedido . "<br>";
        echo "<b>Nome do cliente:</b> " . $this->nomeCliente . "<br>";
        echo "<b>Mesa:</b> " . $this->mesa . "<br>";

        echo "<b>Itens do pedido:</b><br>";

        foreach ($this->itens as $item) {
            echo "- " . $item->nome . " — R$ " . $item->preco . "<br>";
        }

        echo "<b>Valor total: R$ </b>" . $this->valorTotal . "<br>";
        echo "<b>Status do pedido: </b> " . $this->statusPedido . "<br>";
        echo "<b>Forma de pagamento: </b>" . $this->formaPagamento . "<br>";
        echo "<b>Data do pedido: </b>" . $this->dataPedido . "<br>";
        echo "<b>Observações: </b>" . $this->observacoes . "<br>";
        echo "<b>Taxa de serviço:</b> R$ " . $this->taxaServico . "<br>";
    }
}