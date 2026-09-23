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
    public $email;
    public $telefone;
    public $cidade;
    public $estado;
    public $cpf;
    public $endereco;
    public $statusPessoa;


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

echo "<b>Matrícula: </b>" . $this->matricula . "<br>";
echo "<b>Série: </b>" . $this->serie . "<br>";
echo "<b>Turma: </b>" . $this->turmaAtual->nomeTurma . "<br>";
echo "<b>Nota 1: </b>" . $this->nota1 . "<br>";
echo "<b>Nota 2: </b>" . $this->nota2 . "<br>";
echo "<b>Nota 3: </b>" . $this->nota3 . "<br>";
echo "<b>Média final: </b>" . $this->mediaFinal . "<br>";
echo "<b>Situação: </b>" . $this->situacao . "<br>";
echo "<b>Responsável: </b>" . $this->responsavel . "<br>";
echo "<b>Data da matrícula: </b>" . $this->dataMatricula . "<br>";
    }

}

?>