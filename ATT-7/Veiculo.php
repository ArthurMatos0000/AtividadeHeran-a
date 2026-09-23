<?php

class Veiculo
{
    public $placa;
    public $marca;
    public $modelo;
    public $ano;
    public $cor;
    public $velocidadeAtual;
    public $combustivel;
    public $quilometragem;
    public $statusVeiculo;
    public $motoristaAtual;

    public function cadastrarVeiculo($placa, $modelo)
    {
        $this->placa = $placa;
        $this->modelo = $modelo;
    }

    public function acelerar($valor)
    {
        $this->velocidadeAtual += $valor;
    }

    public function frear($valor)
    {
        $this->velocidadeAtual -= $valor;

        if ($this->velocidadeAtual < 0) {
            $this->velocidadeAtual = 0;
        }
    }

    public function abastecer($litros)
    {
        $this->combustivel += $litros;
    }

    public function alterarMotorista($motorista)
    {
        $this->motoristaAtual = $motorista;
    }

    public function exibirDadosVeiculo()
    {
        echo "<b>Placa: </b>" . $this->placa . "<br>";
        echo "<b>Marca: </b>" . $this->marca . "<br>";
        echo "<b>Modelo: </b>" . $this->modelo . "<br>";
        echo "<b>Ano: </b>" . $this->ano . "<br>";
        echo "<b>Cor: </b>" . $this->cor . "<br>";
        echo "<b>Velocidade atual: </b>" . $this->velocidadeAtual . " km/h<br>";
        echo "<b>Combustível: </b>" . $this->combustivel . " litros<br>";
        echo "<b>Quilometragem: </b>" . $this->quilometragem . " km<br>";
        echo "<b>Status do veículo: </b>" . $this->statusVeiculo . "<br>";
        echo "<b>Motorista atual: </b>" . $this->motoristaAtual . "<br>";
    }
}