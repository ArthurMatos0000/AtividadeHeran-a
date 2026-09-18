<?php

include_once __DIR__ . "/ItemBiblioteca.php";

class Livro extends ItemBiblioteca
{
    public $autor;
    public $ISBN;
    public $genero;
    public $numeroCapitulos;
    public $edicao;
    public $tipoCapa;
    public $resumo;
    public $classificacaoIndicativa;
    public $quantidadeExemplares;
    public $exemplaresDisponiveis;

    public function definirAutor($autor)
    {
        $this->autor = $autor;
    }

    public function atualizarResumo($novoResumo)
    {
        $this->resumo = $novoResumo;
    }

    public function adicionarExemplar($quantidade)
    {
        $this->quantidadeExemplares += $quantidade;
        $this->exemplaresDisponiveis += $quantidade;
    }

    public function removerExemplar($quantidade)
    {
        $this->quantidadeExemplares -= $quantidade;
        $this->exemplaresDisponiveis -= $quantidade;
    }

    public function verificarEstoque()
    {
        if ($this->exemplaresDisponiveis > 0) {
            return "Há exemplares disponíveis.";
        } else {
            return "Não há exemplares disponíveis.";
        }
    }

    public function exibirDadosLivro()
    {
        $this->exibirDadosItem();

echo "<b>Autor: </b>" . $this->autor . "<br>";
echo "<b>ISBN: </b>" . $this->ISBN . "<br>";
echo "<b>Gênero: </b>" . $this->genero . "<br>";
echo "<b>Número de capítulos: </b>" . $this->numeroCapitulos . "<br>";
echo "<b>Edição: </b>" . $this->edicao . "<br>";
echo "<b>Tipo de capa: </b>" . $this->tipoCapa . "<br>";
echo "<b>Resumo: </b>" . $this->resumo . "<br>";
echo "<b>Classificação indicativa: </b>" . $this->classificacaoIndicativa . "<br>";
echo "<b>Quantidade de exemplares: </b>" . $this->quantidadeExemplares . "<br>";
echo "<b>Exemplares disponíveis: </b>" . $this->exemplaresDisponiveis . "<br>";
    }
}