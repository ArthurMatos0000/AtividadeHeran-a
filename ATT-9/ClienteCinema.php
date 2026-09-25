<?php

include_once __DIR__ . "/Pessoa.php";

class ClienteCinema extends Pessoa
{
    public $codigoCliente;
    public $tipoIngresso;
    public $filmesAssistidos = [];
    public $pontosFidelidade;
    public $meiaEntrada;
    public $formaPagamento;
    public $assentoEscolhido;
    public $pipocaComprada;
    public $bebidaComprada;
    public $statusCliente;

    public function comprarIngresso($sessao)
    {
        $sessao->adicionarCliente($this);
    }

    public function escolherAssento($assento)
    {
        $this->assentoEscolhido = $assento;
    }

    public function adicionarPontos($pontos)
    {
        $this->pontosFidelidade += $pontos;
    }

    public function comprarPipoca($status)
    {
        $this->pipocaComprada = $status;
    }

    public function comprarBebida($status)
    {
        $this->bebidaComprada = $status;
    }

    public function exibirDadosCliente()
    {
        echo "<b>Código do cliente: </b>" . $this->codigoCliente . "<br>";
        echo "<b>Tipo de ingresso: </b>" . $this->tipoIngresso . "<br>";
        echo "<b>Filmes assistidos: </b>" . implode(", ", $this->filmesAssistidos) . "<br>";
        echo "<b>Pontos de fidelidade: </b>" . $this->pontosFidelidade . "<br>";
        echo "<b>Meia entrada: </b>" . $this->meiaEntrada . "<br>";
        echo "<b>Forma de pagamento: </b>" . $this->formaPagamento . "<br>";
        echo "<b>Assento escolhido: </b>" . $this->assentoEscolhido . "<br>";
        echo "<b>Pipoca comprada: </b>" . $this->pipocaComprada . "<br>";
        echo "<b>Bebida comprada: </b>" . $this->bebidaComprada . "<br>";
        echo "<b>Status do cliente: </b>" . $this->statusCliente . "<br>";
    }
}