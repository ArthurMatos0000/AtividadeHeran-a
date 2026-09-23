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

echo "<b>Registro: </b>" . $this->registroProfessor . "<br>";
echo "<b>Disciplina: </b>" . $this->disciplina . "<br>";
echo "<b>Carga horária: </b>" . $this->cargaHoraria . "<br>";
echo "<b>Salário: </b>R$ " . $this->salario . "<br>";
echo "<b>Formação: </b>" . $this->formacao . "<br>";
echo "<b>Especialidade: </b>" . $this->especialidade . "<br>";
echo "<b>Quantidade de turmas: </b>" . count($this->turmasAtendidas) . "<br>";
echo "<b>Horário de aula: </b>" . $this->horarioAula . "<br>";
echo "<b>Ano de contratação: </b>" . $this->anoContratacao . "<br>";
echo "<b>Status do professor: </b>" . $this->statusProfessor . "<br>";
    }
}

?>