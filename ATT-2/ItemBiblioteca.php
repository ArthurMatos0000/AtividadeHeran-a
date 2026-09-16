<?php

class ItemBiblioteca
{
    public $titulo;
    public $codigo;
    public $anoPublicacao;
    public $editora;
    public $categoria;
    public $quantidadePaginas;
    public $idioma;
    public $status;
    public $localizacaoBiblioteca;
    public $dataCadastro;

    public function cadastrarItem($titulo, $codigo)
    {
        $this->titulo = $titulo;
        $this->codigo = $codigo;
    }

    public function alterarStatus($novoStatus)
    {
        $this->status = $novoStatus;
    }

    public function atualizarLocalizacao($novaLocalizacao)
    {
        $this->localizacaoBiblioteca = $novaLocalizacao;
    }

    public function alterarCategoria($novaCategoria)
    {
        $this->categoria = $novaCategoria;
    }

    public function verificarDisponibilidade()
    {
        if ($this->status == "Disponível") {
            return "Item disponível para empréstimo.";
        } else {
            return "Item não disponível para empréstimo.";
        }
    }

    public function exibirDadosItem()
    {
        echo "Título: " . $this->titulo . "<br>";
        echo "Código: " . $this->codigo . "<br>";
        echo "Ano de publicação: " . $this->anoPublicacao . "<br>";
        echo "Editora: " . $this->editora . "<br>";
        echo "Categoria: " . $this->categoria . "<br>";
        echo "Quantidade de páginas: " . $this->quantidadePaginas . "<br>";
        echo "Idioma: " . $this->idioma . "<br>";
        echo "Status: " . $this->status . "<br>";
        echo "Localização: " . $this->localizacaoBiblioteca . "<br>";
        echo "Data de cadastro: " . $this->dataCadastro . "<br>";
    }
}