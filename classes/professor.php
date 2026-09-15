<?php

include_once __DIR__ . "/Pessoa.php";

class Professor extends Pessoa {

    public $registroProfessor;
    public $disciplina;
    public $cargaHoraria;
    public $salario;
    public $formacao;
    public $especialidade;
    public $turmasAtendidas = [];
    public $horarioAula;
    public $anoContratacao;
    public $statusProfessor;

    public function atribuirDisciplina($disciplina) {
        $this->disciplina = $disciplina;
    }

    public function adicionarTurma($turma) {
        $this->turmasAtendidas[] = $turma;
    }

    public function removerTurma($turma) {
        $posicao = array_search($turma, $this->turmasAtendidas, true);

        if ($posicao !== false) {
            unset($this->turmasAtendidas[$posicao]);
        }
    }

    public function alterarCargaHoraria($novaCargaHoraria) {
        $this->cargaHoraria = $novaCargaHoraria;
    }

    public function atualizarSalario($novoValor) {
        $this->salario = $novoValor;
    }

    public function exibirDadosProfessor() {
        echo "<h3>Dados do Professor</h3>";

        $this->exibirDadosPessoa();

        echo "Registro: " . $this->registroProfessor . "<br>";
        echo "Disciplina: " . $this->disciplina . "<br>";
        echo "Carga horária: " . $this->cargaHoraria . "<br>";
        echo "Salário: R$ " . $this->salario . "<br>";
        echo "Formação: " . $this->formacao . "<br>";
        echo "Especialidade: " . $this->especialidade . "<br>";
        echo "Quantidade de turmas: " . count($this->turmasAtendidas) . "<br>";
        echo "Horário de aula: " . $this->horarioAula . "<br>";
        echo "Ano de contratação: " . $this->anoContratacao . "<br>";
        echo "Status do professor: " . $this->statusProfessor . "<br>";
    }
}

?>