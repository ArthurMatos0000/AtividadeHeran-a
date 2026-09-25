<?php

class AgendaEventos
{
    public $nomeAgenda;
    public $codigoAgenda;
    public $responsavelAgenda;
    public $eventos = [];
    public $quantidadeEventos;
    public $anoLetivo;
    public $escola;
    public $cidade;
    public $dataCriacao;
    public $statusAgenda;

    public function adicionarEvento($evento)
    {
        $this->eventos[] = $evento;
        $this->quantidadeEventos++;
    }

    public function removerEvento($evento)
    {
        foreach ($this->eventos as $chave => $eventoAgenda) {
            if ($eventoAgenda === $evento) {
                unset($this->eventos[$chave]);
                $this->quantidadeEventos--;
                break;
            }
        }

        $this->eventos = array_values($this->eventos);
    }

    public function listarEventos()
    {
        foreach ($this->eventos as $evento) {
            echo "- " . $evento->titulo . "<br>";
        }
    }

    public function buscarEvento($titulo)
    {
        foreach ($this->eventos as $evento) {
            if ($evento->titulo === $titulo) {
                return $evento;
            }
        }

        return null;
    }

    public function contarEventos()
    {
        return $this->quantidadeEventos;
    }

    public function exibirDadosAgenda()
    {
        echo "<b>Nome da agenda: </b>" . $this->nomeAgenda . "<br>";
        echo "<b>Código da agenda: </b>" . $this->codigoAgenda . "<br>";
        echo "<b>Responsável da agenda: </b>" . $this->responsavelAgenda . "<br>";
        echo "<b>Quantidade de eventos: </b>" . $this->quantidadeEventos . "<br>";
        echo "<b>Ano letivo: </b>" . $this->anoLetivo . "<br>";
        echo "<b>Escola: </b>" . $this->escola . "<br>";
        echo "<b>Cidade: </b>" . $this->cidade . "<br>";
        echo "<b>Data de criação: </b>" . $this->dataCriacao . "<br>";
        echo "<b>Status da agenda: </b>" . $this->statusAgenda . "<br>";

        echo "<b>Eventos cadastrados:</b><br>";
        $this->listarEventos();
    }
}