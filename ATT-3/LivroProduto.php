<?php

include_once __DIR__ . "/Produto.php";

class LivroProduto extends Produto
{
    public $autor;
    public $editora;
    public $ISBN;
    public $genero;
    public $numeroPaginas;
    public $anoLancamento;
    public $idioma;
    public $tipoCapa;
    public $faixaEtaria;
    public $sinopse;

    public function definirAutor($autor)
    {
        $this->autor = $autor;
    }

    public function alterarEditora($editora)
    {
        $this->editora = $editora;
    }

    public function atualizarSinopse($sinopse)
    {
        $this->sinopse = $sinopse;
    }

    public function alterarGenero($genero)
    {
        $this->genero = $genero;
    }

    public function informarFaixaEtaria($faixaEtaria)
    {
        $this->faixaEtaria = $faixaEtaria;
    }

    public function exibirDadosLivro()
    {
        $this->exibirDadosProduto();

        echo "Autor: " . $this->autor . "<br>";
        echo "Editora: " . $this->editora . "<br>";
        echo "ISBN: " . $this->ISBN . "<br>";
        echo "Gênero: " . $this->genero . "<br>";
        echo "Número de páginas: " . $this->numeroPaginas . "<br>";
        echo "Ano de lançamento: " . $this->anoLancamento . "<br>";
        echo "Idioma: " . $this->idioma . "<br>";
        echo "Tipo de capa: " . $this->tipoCapa . "<br>";
        echo "Faixa etária: " . $this->faixaEtaria . "<br>";
        echo "Sinopse: " . $this->sinopse . "<br>";
    }
}