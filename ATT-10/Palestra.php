<?php

include_once __DIR__ . "/Evento.php";

class Palestra extends Evento
{
    public $nomePalestrante;
    public $tema;
    public $miniCurriculo;
    public $recursosNecessarios = [];
    public $duracaoMinutos;
    public $certificado;
    public $quantidadeInscritos;
    public $materialApoio;
    public $linkApresentacao;
    public $areaConhecimento;

    public function definirPalestrante($nome)
    {
        $this->nomePalestrante = $nome;
    }

    public function alterarTema($tema)
    {
        $this->tema = $tema;
    }

    public function adicionarRecurso($recurso)
    {
        $this->recursosNecessarios[] = $recurso;
    }

    public function ativarCertificado($status)
    {
        $this->certificado = $status;
    }

    public function adicionarInscrito($quantidade)
    {
        $this->quantidadeInscritos += $quantidade;
    }

    public function exibirDadosPalestra()
    {
        echo "<b>Nome do palestrante: </b>" . $this->nomePalestrante . "<br>";
        echo "<b>Tema: </b>" . $this->tema . "<br>";
        echo "<b>Mini currículo: </b>" . $this->miniCurriculo . "<br>";
        echo "<b>Recursos necessários: </b>" . implode(", ", $this->recursosNecessarios) . "<br>";
        echo "<b>Duração em minutos: </b>" . $this->duracaoMinutos . "<br>";
        echo "<b>Certificado: </b>" . $this->certificado . "<br>";
        echo "<b>Quantidade de inscritos: </b>" . $this->quantidadeInscritos . "<br>";
        echo "<b>Material de apoio: </b>" . $this->materialApoio . "<br>";
        echo "<b>Link da apresentação: </b>" . $this->linkApresentacao . "<br>";
        echo "<b>Área de conhecimento: </b>" . $this->areaConhecimento . "<br>";
    }
}