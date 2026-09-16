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

        echo "Autor: " . $this->autor . "<br>";
        echo "ISBN: " . $this->ISBN . "<br>";
        echo "Gênero: " . $this->genero . "<br>";
        echo "Número de capítulos: " . $this->numeroCapitulos . "<br>";
        echo "Edição: " . $this->edicao . "<br>";
        echo "Tipo de capa: " . $this->tipoCapa . "<br>";
        echo "Resumo: " . $this->resumo . "<br>";
        echo "Classificação indicativa: " . $this->classificacaoIndicativa . "<br>";
        echo "Quantidade de exemplares: " . $this->quantidadeExemplares . "<br>";
        echo "Exemplares disponíveis: " . $this->exemplaresDisponiveis . "<br>";
    }
}