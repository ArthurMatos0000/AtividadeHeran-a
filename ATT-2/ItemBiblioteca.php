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
echo "<b>Título: </b>" . $this->titulo . "<br>";
echo "<b>Código: </b>" . $this->codigo . "<br>";
echo "<b>Ano de publicação: </b>" . $this->anoPublicacao . "<br>";
echo "<b>Editora: </b>" . $this->editora . "<br>";
echo "<b>Categoria: </b>" . $this->categoria . "<br>";
echo "<b>Quantidade de páginas: </b>" . $this->quantidadePaginas . "<br>";
echo "<b>Idioma: </b>" . $this->idioma . "<br>";
echo "<b>Status: </b>" . $this->status . "<br>";
echo "<b>Localização: </b>" . $this->localizacaoBiblioteca . "<br>";
echo "<b>Data de cadastro: </b>" . $this->dataCadastro . "<br>";
}
}