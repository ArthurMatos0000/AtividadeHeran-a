<?php

include_once __DIR__ . "/Evento.php";

class Oficina extends Evento
{
    public $nomeInstrutor;
    public $temaPratico;
    public $materiaisNecessarios = [];
    public $numeroComputadores;
    public $duracaoMinutos;
    public $nivelConhecimento;
    public $atividadeFinal;
    public $quantidadeGrupos;
    public $softwareUtilizado;
    public $entregaObrigatoria;

    public function definirInstrutor($nome)
    {
        $this->nomeInstrutor = $nome;
    }

    public function adicionarMaterial($material)
    {
        $this->materiaisNecessarios[] = $material;
    }

    public function alterarNivel($nivel)
    {
        $this->nivelConhecimento = $nivel;
    }

    public function definirAtividadeFinal($atividade)
    {
        $this->atividadeFinal = $atividade;
    }

    public function informarSoftware($software)
    {
        $this->softwareUtilizado = $software;
    }

    public function exibirDadosOficina()
    {
        echo "<b>Nome do instrutor: </b>" . $this->nomeInstrutor . "<br>";
        echo "<b>Tema prático: </b>" . $this->temaPratico . "<br>";
        echo "<b>Materiais necessários: </b>" . implode(", ", $this->materiaisNecessarios) . "<br>";
        echo "<b>Número de computadores: </b>" . $this->numeroComputadores . "<br>";
        echo "<b>Duração em minutos: </b>" . $this->duracaoMinutos . "<br>";
        echo "<b>Nível de conhecimento: </b>" . $this->nivelConhecimento . "<br>";
        echo "<b>Atividade final: </b>" . $this->atividadeFinal . "<br>";
        echo "<b>Quantidade de grupos: </b>" . $this->quantidadeGrupos . "<br>";
        echo "<b>Software utilizado: </b>" . $this->softwareUtilizado . "<br>";
        echo "<b>Entrega obrigatória: </b>" . $this->entregaObrigatoria . "<br>";
    }
}