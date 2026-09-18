<?php

include_once __DIR__ . "/ProdutoCardapio.php";

class Bebida extends ProdutoCardapio
{
    public $volumeMl;
    public $tipoBebida;
    public $temperatura;
    public $contemAcucar;
    public $contemGas;
    public $marca;
    public $validade;
    public $embalagem;
    public $sabor;
    public $teorAlcoolico;

    public function alterarVolume($volume)
    {
        $this->volumeMl = $volume;
    }

    public function definirTemperatura($temperatura)
    {
        $this->temperatura = $temperatura;
    }

    public function alterarSabor($sabor)
    {
        $this->sabor = $sabor;
    }

    public function informarAcucar($status)
    {
        $this->contemAcucar = $status;
    }

    public function informarGas($status)
    {
        $this->contemGas = $status;
    }

    public function exibirDadosBebida()
    {
        echo "Nome: " . $this->nome . "<br>";
        echo "Código: " . $this->codigo . "<br>";
        echo "Preço: R$ " . $this->preco . "<br>";
        echo "Descrição: " . $this->descricao . "<br>";
        echo "Categoria: " . $this->categoria . "<br>";
        echo "Volume: " . $this->volumeMl . " ml<br>";
        echo "Tipo de bebida: " . $this->tipoBebida . "<br>";
        echo "Temperatura: " . $this->temperatura . "<br>";
        echo "Contém açúcar: " . $this->contemAcucar . "<br>";
        echo "Contém gás: " . $this->contemGas . "<br>";
        echo "Marca: " . $this->marca . "<br>";
        echo "Validade: " . $this->validade . "<br>";
        echo "Embalagem: " . $this->embalagem . "<br>";
        echo "Sabor: " . $this->sabor . "<br>";
        echo "Teor alcoólico: " . $this->teorAlcoolico . "<br>";
    }
}