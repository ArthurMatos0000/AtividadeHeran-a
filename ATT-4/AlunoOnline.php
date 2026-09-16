<?php

include_once __DIR__ . "/Pessoa.php";

class AlunoOnline extends Pessoa
{
    public $matricula;
    public $cursosInscritos = [];
    public $progressoCurso;
    public $notaFinal;
    public $certificadoEmitido;
    public $dataInscricao;
    public $ultimoAcesso;
    public $planoAssinatura;
    public $nivelConhecimento;
    public $statusAluno;

    public function inscreverEmCurso($curso)
    {
        $this->cursosInscritos[] = $curso;
    }

    public function assistirAula($aula)
    {
        $this->ultimoAcesso = $aula;
    }

    public function atualizarProgresso($valorProgresso)
    {
        $this->progressoCurso = $valorProgresso;
    }

    public function registrarNota($nota)
    {
        $this->notaFinal = $nota;
    }

    public function emitirCertificado($curso)
    {
        $this->certificadoEmitido = "Sim";
    }

    public function exibirDadosAluno()
    {
        echo "Nome: " . $this->nome . "<br>";
        echo "Matrícula: " . $this->matricula . "<br>";
        echo "E-mail: " . $this->email . "<br>";
        echo "Progresso do curso: " . $this->progressoCurso . "%<br>";
        echo "Nota final: " . $this->notaFinal . "<br>";
        echo "Certificado emitido: " . $this->certificadoEmitido . "<br>";
        echo "Data de inscrição: " . $this->dataInscricao . "<br>";
        echo "Último acesso: " . $this->ultimoAcesso . "<br>";
        echo "Plano de assinatura: " . $this->planoAssinatura . "<br>";
        echo "Nível de conhecimento: " . $this->nivelConhecimento . "<br>";
        echo "Status do aluno: " . $this->statusAluno . "<br>";

        echo "Cursos inscritos:<br>";

        foreach ($this->cursosInscritos as $curso) {
            echo "- " . $curso . "<br>";
        }
    }
}