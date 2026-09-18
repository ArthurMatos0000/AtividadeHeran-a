<?php

include_once __DIR__ . "/Pessoa.php";

class Paciente extends Pessoa
{
    public $numeroProntuario;
    public $tipoSanguineo;
    public $convenio;
    public $sintomas = [];
    public $alergias = [];
    public $medicamentosEmUso = [];
    public $historicoMedico;
    public $peso;
    public $altura;
    public $statusPaciente;

    public function informarSintoma($sintoma)
    {
        $this->sintomas[] = $sintoma;
    }

    public function adicionarAlergia($alergia)
    {
        $this->alergias[] = $alergia;
    }

    public function atualizarPeso($peso)
    {
        $this->peso = $peso;
    }

    public function atualizarAltura($altura)
    {
        $this->altura = $altura;
    }

    public function registrarMedicamento($medicamento)
    {
        $this->medicamentosEmUso[] = $medicamento;
    }

    public function exibirDadosPaciente()
    {
echo "<b>Nome: </b>" . $this->nome . "<br>";
echo "<b>Número do prontuário: </b>" . $this->numeroProntuario . "<br>";
echo "<b>Tipo sanguíneo: </b>" . $this->tipoSanguineo . "<br>";
echo "<b>Convênio: </b>" . $this->convenio . "<br>";
echo "<b>Sintomas: </b>" . implode(", ", $this->sintomas) . "<br>";
echo "<b>Alergias: </b>" . implode(", ", $this->alergias) . "<br>";
echo "<b>Medicamentos em uso: </b>" . implode(", ", $this->medicamentosEmUso) . "<br>";
echo "<b>Histórico médico: </b>" . $this->historicoMedico . "<br>";
echo "<b>Peso: </b>" . $this->peso . "<br>";
echo "<b>Altura: </b>" . $this->altura . "<br>";
echo "<b>Status do paciente: </b>" . $this->statusPaciente . "<br>";
    }
}
