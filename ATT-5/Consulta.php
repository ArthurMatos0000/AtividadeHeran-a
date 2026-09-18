<?php

class Consulta
{
    public $codigoConsulta;
    public $paciente;
    public $medico;
    public $dataConsulta;
    public $horarioConsulta;
    public $motivo;
    public $statusConsulta;
    public $observacoes;
    public $valorConsulta;
    public $formaPagamento;

    public function agendarConsulta($paciente, $medico)
    {
        $this->paciente = $paciente;
        $this->medico = $medico;

        $medico->adicionarPaciente($paciente);
    }

    public function alterarData($data)
    {
        $this->dataConsulta = $data;
    }

    public function alterarHorario($horario)
    {
        $this->horarioConsulta = $horario;
    }

    public function cancelarConsulta($motivo)
    {
        $this->statusConsulta = "Cancelada";
        $this->motivo = $motivo;
    }

    public function registrarObservacao($texto)
    {
        $this->observacoes = $texto;
    }

    public function exibirDadosConsulta()
    {
echo "<b>Código da consulta: </b>" . $this->codigoConsulta . "<br>";
echo "<b>Paciente: </b>" . $this->paciente->nome . "<br>";
echo "<b>Médico: </b>" . $this->medico->nome . "<br>";
echo "<b>Data da consulta: </b>" . $this->dataConsulta . "<br>";
echo "<b>Horário da consulta: </b>" . $this->horarioConsulta . "<br>";
echo "<b>Motivo: </b>" . $this->motivo . "<br>";
echo "<b>Status da consulta: </b>" . $this->statusConsulta . "<br>";
echo "<b>Observações: </b>" . $this->observacoes . "<br>";
echo "<b>Valor da consulta: </b>R$ " . $this->valorConsulta . "<br>";
echo "<b>Forma de pagamento: </b>" . $this->formaPagamento . "<br>";
    }
}