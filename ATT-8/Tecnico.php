<?php

include_once __DIR__ . "/Pessoa.php";

class Tecnico extends Pessoa
{
    public $registroTecnico;
    public $estrategia;
    public $anosExperiencia;
    public $titulosConquistados = [];
    public $salario;
    public $estiloJogo;
    public $auxiliarTecnico;
    public $formacaoPreferida;
    public $jogosComandados;
    public $statusTecnico;

    public function definirEstrategia($estrategia)
    {
        $this->estrategia = $estrategia;
    }

    public function alterarFormacao($formacao)
    {
        $this->formacaoPreferida = $formacao;
    }

    public function adicionarTitulo($titulo)
    {
        $this->titulosConquistados[] = $titulo;
    }

    public function atualizarSalario($valor)
    {
        $this->salario = $valor;
    }

    public function comandarJogo($time)
    {
        $this->jogosComandados++;
    }

    public function exibirDadosTecnico()
    {
        echo "<b>Registro do técnico: </b>" . $this->registroTecnico . "<br>";
        echo "<b>Estratégia: </b>" . $this->estrategia . "<br>";
        echo "<b>Anos de experiência: </b>" . $this->anosExperiencia . "<br>";
        echo "<b>Títulos conquistados: </b>" . implode(", ", $this->titulosConquistados) . "<br>";
        echo "<b>Salário: </b>R$ " . $this->salario . "<br>";
        echo "<b>Estilo de jogo: </b>" . $this->estiloJogo . "<br>";
        echo "<b>Auxiliar técnico: </b>" . $this->auxiliarTecnico . "<br>";
        echo "<b>Formação preferida: </b>" . $this->formacaoPreferida . "<br>";
        echo "<b>Jogos comandados: </b>" . $this->jogosComandados . "<br>";
        echo "<b>Status do técnico: </b>" . $this->statusTecnico . "<br>";
    }
}