<?php

include_once __DIR__ . "/Pessoa.php";

class Jogador extends Pessoa
{
    public $numeroCamisa;
    public $posicao;
    public $gols;
    public $assistencias;
    public $cartoesAmarelos;
    public $cartoesVermelhos;
    public $partidasJogadas;
    public $altura;
    public $peso;
    public $statusJogador;

    public function marcarGol($quantidade)
    {
        $this->gols += $quantidade;
    }

    public function darAssistencia($quantidade)
    {
        $this->assistencias += $quantidade;
    }

    public function receberCartaoAmarelo()
    {
        $this->cartoesAmarelos++;
    }

    public function receberCartaoVermelho()
    {
        $this->cartoesVermelhos++;
    }

    public function alterarPosicao($posicao)
    {
        $this->posicao = $posicao;
    }

    public function exibirDadosJogador()
    {
        echo "<b>Número da camisa: </b>" . $this->numeroCamisa . "<br>";
        echo "<b>Posição: </b>" . $this->posicao . "<br>";
        echo "<b>Gols: </b>" . $this->gols . "<br>";
        echo "<b>Assistências: </b>" . $this->assistencias . "<br>";
        echo "<b>Cartões amarelos: </b>" . $this->cartoesAmarelos . "<br>";
        echo "<b>Cartões vermelhos: </b>" . $this->cartoesVermelhos . "<br>";
        echo "<b>Partidas jogadas: </b>" . $this->partidasJogadas . "<br>";
        echo "<b>Altura: </b>" . $this->altura . "<br>";
        echo "<b>Peso: </b>" . $this->peso . "<br>";
        echo "<b>Status do jogador: </b>" . $this->statusJogador . "<br>";
    }
}