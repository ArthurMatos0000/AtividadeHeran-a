<?php

class Time
{
    public $nomeTime;
    public $cidadeTime;
    public $estadoTime;
    public $tecnico;
    public $jogadores = [];
    public $quantidadeJogadores;
    public $estadio;
    public $pontos;
    public $vitorias;
    public $derrotas;

    public function definirTecnico($tecnico)
    {
        $this->tecnico = $tecnico;
    }

    public function adicionarJogador($jogador)
    {
        $this->jogadores[] = $jogador;
        $this->quantidadeJogadores++;
    }

    public function removerJogador($jogador)
    {
        foreach ($this->jogadores as $chave => $jogadorTime) {
            if ($jogadorTime === $jogador) {
                unset($this->jogadores[$chave]);
                $this->quantidadeJogadores--;
                break;
            }
        }

        $this->jogadores = array_values($this->jogadores);
    }

    public function listarJogadores()
    {
        foreach ($this->jogadores as $jogador) {
            echo "- " . $jogador->nome . "<br>";
        }
    }

    public function calcularPontos($pontos)
    {
        $this->pontos += $pontos;
        return $this->pontos;
    }

    public function exibirDadosTime()
    {
        echo "<b>Nome do time: </b>" . $this->nomeTime . "<br>";
        echo "<b>Cidade: </b>" . $this->cidadeTime . "<br>";
        echo "<b>Estado: </b>" . $this->estadoTime . "<br>";
        echo "<b>Técnico: </b>" . $this->tecnico->nome . "<br>";
        echo "<b>Quantidade de jogadores: </b>" . $this->quantidadeJogadores . "<br>";
        echo "<b>Estádio: </b>" . $this->estadio . "<br>";
        echo "<b>Pontos: </b>" . $this->pontos . "<br>";
        echo "<b>Vitórias: </b>" . $this->vitorias . "<br>";
        echo "<b>Derrotas: </b>" . $this->derrotas . "<br>";

        echo "<b>Jogadores:</b><br>";
        $this->listarJogadores();
    }
}