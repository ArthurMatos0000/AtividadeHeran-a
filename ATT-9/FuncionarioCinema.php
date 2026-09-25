<?php

include_once __DIR__ . "/Pessoa.php";

class FuncionarioCinema extends Pessoa
{
    public $codigoFuncionario;
    public $cargo;
    public $turno;
    public $salario;
    public $dataContratacao;
    public $setor;
    public $cracha;
    public $supervisor;
    public $horasTrabalhadas;
    public $statusFuncionario;

    public function registrarEntrada($horario)
    {
        $this->horasTrabalhadas = $horario;
    }

    public function registrarSaida($horario)
    {
        $this->horasTrabalhadas = $horario;
    }

    public function alterarCargo($cargo)
    {
        $this->cargo = $cargo;
    }

    public function alterarTurno($turno)
    {
        $this->turno = $turno;
    }

    public function atualizarSalario($valor)
    {
        $this->salario = $valor;
    }

    public function exibirDadosFuncionario()
    {
        echo "<b>Código do funcionário: </b>" . $this->codigoFuncionario . "<br>";
        echo "<b>Cargo: </b>" . $this->cargo . "<br>";
        echo "<b>Turno: </b>" . $this->turno . "<br>";
        echo "<b>Salário: </b>R$ " . $this->salario . "<br>";
        echo "<b>Data de contratação: </b>" . $this->dataContratacao . "<br>";
        echo "<b>Setor: </b>" . $this->setor . "<br>";
        echo "<b>Crachá: </b>" . $this->cracha . "<br>";
        echo "<b>Supervisor: </b>" . $this->supervisor . "<br>";
        echo "<b>Horas trabalhadas: </b>" . $this->horasTrabalhadas . "<br>";
        echo "<b>Status do funcionário: </b>" . $this->statusFuncionario . "<br>";
    }
}