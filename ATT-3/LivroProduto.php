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

echo "<b>Autor: </b>" . $this->autor . "<br>";
echo "<b>Editora: </b>" . $this->editora . "<br>";
echo "<b>ISBN: </b>" . $this->ISBN . "<br>";
echo "<b>Gênero: </b>" . $this->genero . "<br>";
echo "<b>Número de páginas: </b>" . $this->numeroPaginas . "<br>";
echo "<b>Ano de lançamento: </b>" . $this->anoLancamento . "<br>";
echo "<b>Idioma: </b>" . $this->idioma . "<br>";
echo "<b>Tipo de capa: </b>" . $this->tipoCapa . "<br>";
echo "<b>Faixa etária: </b>" . $this->faixaEtaria . "<br>";
echo "<b>Sinopse: </b>" . $this->sinopse . "<br>";
    }
}