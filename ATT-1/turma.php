<?php

class Turma {

    public $nomeTurma;
    public $codigoTurma;
    public $anoLetivo;
    public $sala;
    public $turno;
    public $professorResponsavel;
    public $listaAlunos = [];
    public $limiteAlunos;
    public $curso;
    public $statusTurma;

    public function definirProfessor($professor) {
        $this->professorResponsavel = $professor;
        $professor->adicionarTurma($this);
    }

    public function removerProfessor() {
        if ($this->professorResponsavel != null) {

            $professor = $this->professorResponsavel;

            $professor->removerTurma($this);

            $this->professorResponsavel = null;
        }
    }

    public function adicionarAluno($aluno) {
        $this->listaAlunos[] = $aluno;
        $aluno->matricularEmTurma($this);
    }

    public function removerAluno($aluno) {
        $posicao = array_search($aluno, $this->listaAlunos, true);

        if ($posicao !== false) {
            unset($this->listaAlunos[$posicao]);
            $aluno->turmaAtual = null;
        }
    }

    public function contarAlunos() {
        return count($this->listaAlunos);
    }

    public function verificarVagas() {
        if ($this->contarAlunos() < $this->limiteAlunos) {
            echo "A turma possui vagas.<br>";
        } else {
            echo "A turma está lotada.<br>";
        }
    }

    public function exibirDadosTurma() {

        echo "<h2>Turma " . $this->nomeTurma . "</h2>";

        echo "Código: " . $this->codigoTurma . "<br>";
        echo "Ano letivo: " . $this->anoLetivo . "<br>";
        echo "Sala: " . $this->sala . "<br>";
        echo "Turno: " . $this->turno . "<br>";

        if ($this->professorResponsavel != null) {
            echo "Professor: " . $this->professorResponsavel->nome . "<br>";
        } else {
            echo "Professor: Nenhum professor responsável<br>";
        }

        echo "Limite de alunos: " . $this->limiteAlunos . "<br>";
        echo "Curso: " . $this->curso . "<br>";
        echo "Status da turma: " . $this->statusTurma . "<br>";
        echo "Quantidade de alunos: " . $this->contarAlunos() . "<br>";

        echo "<h3>Alunos:</h3>";

        foreach ($this->listaAlunos as $aluno) {
            echo $aluno->nome . "<br>";
        }
    }
}

?>