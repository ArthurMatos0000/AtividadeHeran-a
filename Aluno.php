<?php

require_once 'Pessoa.php';

class Aluno extends Pessoa{

public $Matricula;
public $Serie;
public $TurmaAtual;
public $Nota1;
public $Nota2;
public $Nota3;
public $MediaFinal;
public $Situacao;
public $Responsavel;
public $DataMatricula;

public function matricularEmTurma($turma){
    $this->TurmaAtual = $turma;
    $turma->adicionarAluno($this);  
}

public function adicionarNota($valorNota){
    if ($this->Nota1 === null) {
        $this->Nota1 = $valorNota;
    } elseif ($this->Nota2 === null) {
        $this->Nota2 = $valorNota;
    } elseif ($this->Nota3 === null) {
        $this->Nota3 = $valorNota;
    }
}

public function calcularMedia(){
    $notas = [];

    if ($this->Nota1 !== null) {
        $notas[] = $this->Nota1;
    }

    if ($this->Nota2 !== null) {
        $notas[] = $this->Nota2;
    }

    if ($this->Nota3 !== null) {
        $notas[] = $this->Nota3;
    }

    if (count($notas) > 0) {
        $this->MediaFinal = array_sum($notas) / count($notas);
    } else {
        $this->MediaFinal = null;
    }

    return $this->MediaFinal;
}

 public function alterarSituacao($novaSituacao)
    {
        $this->situacao = $novaSituacao;
    }

    public function trocarTurma($novaTurma)
    {
        if ($this->turmaAtual != null) {
            $this->turmaAtual->removerAluno($this);
        }

        $this->turmaAtual = $novaTurma;
        $novaTurma->adicionarAluno($this);
    }

    public function exibirDadosAluno()
    {
       echo "<h3>Dados do Aluno</h3>";

        $this->exibirDadosPessoa();

        echo "Matrícula: {$this->matricula}<br>";
        echo "Série: {$this->serie}<br>";

      if ($this->turmaAtual != null) {
            echo "Turma: {$this->turmaAtual->nomeTurma}<br>";
        } else {
            echo "Turma: Nenhuma<br>";
        }

        echo "<b>Nota 1:</b> {$this->Nota1}<br>";
        echo "<b>Nota 2:</b> {$this->Nota2}<br>";
        echo "<b>Nota 3:</b> {$this->Nota3}<br>";
        echo "<b>Média Final:</b> {$this->MediaFinal}<br>";
        echo "<b>Situação:</b> {$this->Situacao}<br>";
        echo "<b>Responsável:</b> {$this->Responsavel}<br>";
        echo "<b>Data de Matrícula:</b> {$this->DataMatricula}<br>";

        
    }
}