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

        echo "Número da edição: " . $this->numeroEdicao . "<br>";
        echo "Mês de publicação: " . $this->mesPublicacao . "<br>";
        echo "Tema principal: " . $this->temaPrincipal . "<br>";
        echo "Periodicidade: " . $this->periodicidade . "<br>";
        echo "Jornalista responsável: " . $this->jornalistaResponsavel . "<br>";
        echo "Seção principal: " . $this->secaoPrincipal . "<br>";
        echo "Código de barras: " . $this->codigoBarras . "<br>";
        echo "Público-alvo: " . $this->publicoAlvo . "<br>";
        echo "Quantidade de matérias: " . $this->quantidadeMaterias . "<br>";
        echo "Patrocinador: " . $this->patrocinador . "<br>";
    }
}