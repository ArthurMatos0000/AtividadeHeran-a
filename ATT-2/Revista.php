<?php

include_once __DIR__ . "/ItemBiblioteca.php";

class Revista extends ItemBiblioteca
{
    public $numeroEdicao;
    public $mesPublicacao;
    public $temaPrincipal;
    public $periodicidade;
    public $jornalistaResponsavel;
    public $secaoPrincipal;
    public $codigoBarras;
    public $publicoAlvo;
    public $quantidadeMaterias;
    public $patrocinador;

    public function definirEdicao($numeroEdicao)
    {
        $this->numeroEdicao = $numeroEdicao;
    }

    public function alterarTema($tema)
    {
        $this->temaPrincipal = $tema;
    }

    public function atualizarPeriodicidade($periodicidade)
    {
        $this->periodicidade = $periodicidade;
    }

    public function adicionarMateria($quantidade)
    {
        $this->quantidadeMaterias += $quantidade;
    }

    public function alterarPublicoAlvo($publicoAlvo)
    {
        $this->publicoAlvo = $publicoAlvo;
    }

    public function exibirDadosRevista()
    {
        $this->exibirDadosItem();
echo "<b>Número da edição: </b>" . $this->numeroEdicao . "<br>";
echo "<b>Mês de publicação: </b>" . $this->mesPublicacao . "<br>";
echo "<b>Tema principal: </b>" . $this->temaPrincipal . "<br>";
echo "<b>Periodicidade: </b>" . $this->periodicidade . "<br>";
echo "<b>Jornalista responsável: </b>" . $this->jornalistaResponsavel . "<br>";
echo "<b>Seção principal: </b>" . $this->secaoPrincipal . "<br>";
echo "<b>Código de barras: </b>" . $this->codigoBarras . "<br>";
echo "<b>Público-alvo: </b>" . $this->publicoAlvo . "<br>";
echo "<b>Quantidade de matérias: </b>" . $this->quantidadeMaterias . "<br>";
echo "<b>Patrocinador: </b>" . $this->patrocinador . "<br>";
    }
}