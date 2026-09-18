<?php

include_once __DIR__ . "/Pessoa.php";

class Instrutor extends Pessoa
{
    public $codigoInstrutor;
    public $areaAtuacao = [];
    public $formacao;
    public $cursosCriados = [];
    public $avaliacaoMedia;
    public $biografia;
    public $anosExperiencia;
    public $redeSocial;
    public $valorHora;
    public $statusInstrutor;

    public function criarCurso($curso)
    {
        $this->cursosCriados[] = $curso;
    }

    public function publicarAula($tituloAula)
    {
        echo "Aula publicada: " . $tituloAula . "<br>";
    }

    public function atualizarBiografia($texto)
    {
        $this->biografia = $texto;
    }

    public function alterarValorHora($valor)
    {
        $this->valorHora = $valor;
    }

    public function adicionarArea($area)
    {
        $this->areaAtuacao[] = $area;
    }

    public function exibirDadosInstrutor()
    {
        echo "Nome: " . $this->nome . "<br>";
        echo "Código do instrutor: " . $this->codigoInstrutor . "<br>";
        echo "Área de atuação: " . implode(", ", $this->areaAtuacao) . "<br>";
        echo "Formação: " . $this->formacao . "<br>";
        echo "Cursos criados: " . implode(", ", $this->cursosCriados) . "<br>";
        echo "Avaliação média: " . $this->avaliacaoMedia . "<br>";
        echo "Biografia: " . $this->biografia . "<br>";
        echo "Anos de experiência: " . $this->anosExperiencia . "<br>";
        echo "Rede social: " . $this->redeSocial . "<br>";
        echo "Valor por hora: R$ " . $this->valorHora . "<br>";
        echo "Status do instrutor: " . $this->statusInstrutor . "<br>";
    }
}