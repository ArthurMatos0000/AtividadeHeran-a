<?php

include_once __DIR__ . "/Veiculo.php";

class Carro extends Veiculo
{
    public $quantidadePortas;
    public $tipoCambio;
    public $capacidadePortaMalas;
    public $quantidadePassageiros;
    public $arCondicionado;
    public $tipoDirecao;
    public $seguroAtivo;
    public $categoriaCarro;
    public $consumoMedio;
    public $usoAtual;

    public function abrirPortaMalas()
    {
        echo "Porta-malas aberto.<br>";
    }

    public function fecharPortaMalas()
    {
        echo "Porta-malas fechado.<br>";
    }

    public function alterarUso($uso)
    {
        $this->usoAtual = $uso;
    }

    public function ativarSeguro($status)
    {
        $this->seguroAtivo = $status;
    }

    public function calcularConsumo($distancia)
    {
        if ($this->consumoMedio > 0) {
            return $distancia / $this->consumoMedio;
        }

        return 0;
    }

    public function exibirDadosCarro()
    {
        echo "<b>Quantidade de portas: </b>" . $this->quantidadePortas . "<br>";
        echo "<b>Tipo de câmbio: </b>" . $this->tipoCambio . "<br>";
        echo "<b>Capacidade do porta-malas: </b>" . $this->capacidadePortaMalas . "<br>";
        echo "<b>Quantidade de passageiros: </b>" . $this->quantidadePassageiros . "<br>";
        echo "<b>Ar-condicionado: </b>" . $this->arCondicionado . "<br>";
        echo "<b>Tipo de direção: </b>" . $this->tipoDirecao . "<br>";
        echo "<b>Seguro ativo: </b>" . $this->seguroAtivo . "<br>";
        echo "<b>Categoria do carro: </b>" . $this->categoriaCarro . "<br>";
        echo "<b>Consumo médio: </b>" . $this->consumoMedio . "<br>";
        echo "<b>Uso atual: </b>" . $this->usoAtual . "<br>";
    }
}