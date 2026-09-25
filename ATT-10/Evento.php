<?php

class Evento
{
    public $titulo;
    public $codigoEvento;
    public $dataEvento;
    public $horarioInicio;
    public $horarioFim;
    public $local;
    public $responsavel;
    public $publicoAlvo;
    public $quantidadeVagas;
    public $statusEvento;

    public function cadastrarEvento($titulo, $data)
    {
        $this->titulo = $titulo;
        $this->dataEvento = $data;
    }

    public function alterarData($data)
    {
        $this->dataEvento = $data;
    }

    public function alterarHorario($horarioInicio, $horarioFim)
    {
        $this->horarioInicio = $horarioInicio;
        $this->horarioFim = $horarioFim;
    }

    public function alterarLocal($local)
    {
        $this->local = $local;
    }

    public function alterarStatus($status)
    {
        $this->statusEvento = $status;
    }

    public function exibirDadosEvento()
    {
        echo "<b>Título: </b>" . $this->titulo . "<br>";
        echo "<b>Código do evento: </b>" . $this->codigoEvento . "<br>";
        echo "<b>Data do evento: </b>" . $this->dataEvento . "<br>";
        echo "<b>Horário de início: </b>" . $this->horarioInicio . "<br>";
        echo "<b>Horário de fim: </b>" . $this->horarioFim . "<br>";
        echo "<b>Local: </b>" . $this->local . "<br>";
        echo "<b>Responsável: </b>" . $this->responsavel . "<br>";
        echo "<b>Público-alvo: </b>" . $this->publicoAlvo . "<br>";
        echo "<b>Quantidade de vagas: </b>" . $this->quantidadeVagas . "<br>";
        echo "<b>Status do evento: </b>" . $this->statusEvento . "<br>";
    }
}