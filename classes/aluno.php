<?php

// Incluindo a classe Pessoa

include_once __DIR__ . "/Pessoa.php";

// Herda características de Pessoa

class Aluno extends Pessoa {

    public $matricula;
    public $serie;
    public $turmaAtual;
    public $nota1;
    public $nota2;
    public $nota3;
    public $mediaFinal;
    public $situacao;
    public $responsavel;
    public $dataMatricula;


    public function matricularEmTurma($turma) {

        $this->turmaAtual = $turma;

    }


    public function adicionarNota($valorNota) {

        if ($this->nota1 == "") {

            $this->nota1 = $valorNota;

        } elseif ($this->nota2 == "") {

            $this->nota2 = $valorNota;

        } else {

            $this->nota3 = $valorNota;

        }

    }


    public function calcularMedia() {

        $this->mediaFinal = (
            $this->nota1 +
            $this->nota2 +
            $this->nota3
        ) / 3;

    }


    public function alterarSituacao($novaSituacao) {

        $this->situacao = $novaSituacao;

    }


    public function trocarTurma($novaTurma) {

        $this->turmaAtual = $novaTurma;

    }


    public function exibirDadosAluno() {

        echo "<h3><b>Dados do Aluno</b></h3>";

        $this->exibirDadosPessoa();

        echo "Matrícula: " . $this->matricula . "<br>";
        echo "Série: " . $this->serie . "<br>";
        echo "Turma: " . $this->turmaAtual->nomeTurma . "<br>";
        echo "Nota 1: " . $this->nota1 . "<br>";
        echo "Nota 2: " . $this->nota2 . "<br>";
        echo "Nota 3: " . $this->nota3 . "<br>";
        echo "Média final: " . $this->mediaFinal . "<br>";
        echo "Situação: " . $this->situacao . "<br>";
        echo "Responsável: " . $this->responsavel . "<br>";
        echo "Data da matrícula: " . $this->dataMatricula . "<br>";

    }

}

?>