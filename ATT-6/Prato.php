<?php

include_once __DIR__ . "/ProdutoCardapio.php";

class Prato extends ProdutoCardapio
{
    public $tipoPrato;
    public $ingredientes = [];
    public $tamanhoPorcao;
    public $nivelPimenta;
    public $contemGluten;
    public $contemLactose;
    public $calorias;
    public $acompanhamento;
    public $chefResponsavel;
    public $promocaoAtiva;

    public function adicionarIngrediente($ingrediente)
    {
        $this->ingredientes[] = $ingrediente;
    }

    public function removerIngrediente($ingrediente)
    {
        foreach ($this->ingredientes as $chave => $ingredientePrato) {
            if ($ingredientePrato === $ingrediente) {
                unset($this->ingredientes[$chave]);
            }
        }

        $this->ingredientes = array_values($this->ingredientes);
    }

    public function alterarPorcao($tamanho)
    {
        $this->tamanhoPorcao = $tamanho;
    }

    public function definirAcompanhamento($acompanhamento)
    {
        $this->acompanhamento = $acompanhamento;
    }

    public function ativarPromocao($status)
    {
        $this->promocaoAtiva = $status;
    }

    public function exibirDadosPrato()
    {
        echo "Nome: " . $this->nome . "<br>";
        echo "Código: " . $this->codigo . "<br>";
        echo "Preço: R$ " . $this->preco . "<br>";
        echo "Descrição: " . $this->descricao . "<br>";
        echo "Categoria: " . $this->categoria . "<br>";
        echo "Tipo de prato: " . $this->tipoPrato . "<br>";
        echo "Ingredientes: " . implode(", ", $this->ingredientes) . "<br>";
        echo "Tamanho da porção: " . $this->tamanhoPorcao . "<br>";
        echo "Nível de pimenta: " . $this->nivelPimenta . "<br>";
        echo "Contém glúten: " . $this->contemGluten . "<br>";
        echo "Contém lactose: " . $this->contemLactose . "<br>";
        echo "Calorias: " . $this->calorias . "<br>";
        echo "Acompanhamento: " . $this->acompanhamento . "<br>";
        echo "Chef responsável: " . $this->chefResponsavel . "<br>";
        echo "Promoção ativa: " . $this->promocaoAtiva . "<br>";
    }
}