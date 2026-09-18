<?php

include_once __DIR__ . "/Pessoa.php";

class Medico extends Pessoa
{
    public $CRM;
    public $especialidade;
    public $horarioAtendimento;
    public $salaAtendimento;
    public $pacientesAtendidos = [];
    public $telefoneProfissional;
    public $emailProfissional;
    public $anosExperiencia;
    public $valorConsulta;
    public $statusMedico;

    public function definirEspecialidade($especialidade)
    {
        $this->especialidade = $especialidade;
    }

    public function alterarHorario($horario)
    {
        $this->horarioAtendimento = $horario;
    }

    public function adicionarPaciente($paciente)
    {
        $this->pacientesAtendidos[] = $paciente;
    }

    public function atualizarValorConsulta($valor)
    {
        $this->valorConsulta = $valor;
    }

    public function alterarSala($sala)
    {
        $this->salaAtendimento = $sala;
    }

    public function exibirDadosMedico()
    {
echo "<b>Nome: </b>" . $this->nome . "<br>";
echo "<b>CRM: </b>" . $this->CRM . "<br>";
echo "<b>Especialidade: </b>" . $this->especialidade . "<br>";
echo "<b>Horário de atendimento: </b>" . $this->horarioAtendimento . "<br>";
echo "<b>Sala de atendimento: </b>" . $this->salaAtendimento . "<br>";

echo "<b>Pacientes atendidos:</b><br>";

foreach ($this->pacientesAtendidos as $paciente) {
    echo "- " . $paciente->nome . "<br>";
}

echo "<b>Telefone profissional: </b>" . $this->telefoneProfissional . "<br>";
echo "<b>E-mail profissional: </b>" . $this->emailProfissional . "<br>";
echo "<b>Anos de experiência: </b>" . $this->anosExperiencia . "<br>";
echo "<b>Valor da consulta: </b>R$ " . $this->valorConsulta . "<br>";
echo "<b>Status do médico: </b>" . $this->statusMedico . "<br>";
}
}