<?php

include_once __DIR__ . "/Produto.php";

class Eletronico extends Produto
{
    public $modelo;
    public $voltagem;
    public $garantiaMeses;
    public $numeroSerie;
    public $cor;
    public $capacidade;
    public $sistemaOperacional;
    public $consumoEnergia;
    public $acessoriosInclusos;
    public $assistenciaTecnica;

    public function definirGarantia($meses)
    {
        $this->garantiaMeses = $meses;
    }

    public function alterarVoltagem($voltagem)
    {
        $this->voltagem = $voltagem;
    }

    public function atualizarCapacidade($capacidade)
    {
        $this->capacidade = $capacidade;
    }

    public function informarAcessorios($listaDeAcessorios)
    {
        $this->acessoriosInclusos = $listaDeAcessorios;
    }

    public function verificarGarantia()
    {
        if ($this->garantiaMeses > 0) {
            return "Produto possui garantia.";
        } else {
            return "Produto não possui garantia.";
        }
    }

    public function exibirDadosEletronico()
    {
        $this->exibirDadosProduto();

echo "<b>Modelo: </b>" . $this->modelo . "<br>";
echo "<b>Voltagem: </b>" . $this->voltagem . "<br>";
echo "<b>Garantia: </b>" . $this->garantiaMeses . " meses<br>";
echo "<b>Número de série: </b>" . $this->numeroSerie . "<br>";
echo "<b>Cor: </b>" . $this->cor . "<br>";
echo "<b>Capacidade: </b>" . $this->capacidade . "<br>";
echo "<b>Sistema operacional: </b>" . $this->sistemaOperacional . "<br>";
echo "<b>Consumo de energia: </b>" . $this->consumoEnergia . "<br>";
echo "<b>Acessórios inclusos: </b>" . $this->acessoriosInclusos . "<br>";
echo "<b>Assistência técnica: </b>" . $this->assistenciaTecnica . "<br>";
echo "<b>Garantia: </b>" . $this->verificarGarantia() . "<br>";
    }
}