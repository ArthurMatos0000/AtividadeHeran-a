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

        echo "Modelo: " . $this->modelo . "<br>";
        echo "Voltagem: " . $this->voltagem . "<br>";
        echo "Garantia: " . $this->garantiaMeses . " meses<br>";
        echo "Número de série: " . $this->numeroSerie . "<br>";
        echo "Cor: " . $this->cor . "<br>";
        echo "Capacidade: " . $this->capacidade . "<br>";
        echo "Sistema operacional: " . $this->sistemaOperacional . "<br>";
        echo "Consumo de energia: " . $this->consumoEnergia . "<br>";
        echo "Acessórios inclusos: " . $this->acessoriosInclusos . "<br>";
        echo "Assistência técnica: " . $this->assistenciaTecnica . "<br>";
        echo "Garantia: " . $this->verificarGarantia() . "<br>";
    }
}