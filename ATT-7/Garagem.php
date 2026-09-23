<?php

class Garagem
{
    public $nomeGaragem;
    public $codigoGaragem;
    public $endereco;
    public $cidade;
    public $responsavel;
    public $veiculos = [];
    public $capacidadeMaxima;
    public $quantidadeAtual;
    public $telefone;
    public $statusGaragem;

    public function adicionarVeiculo($veiculo)
    {
        if ($this->verificarVagas()) {
            $this->veiculos[] = $veiculo;
            $this->quantidadeAtual++;
        }
    }

    public function removerVeiculo($veiculo)
    {
        foreach ($this->veiculos as $chave => $veiculoGaragem) {
            if ($veiculoGaragem === $veiculo) {
                unset($this->veiculos[$chave]);
                $this->quantidadeAtual--;
                break;
            }
        }

        $this->veiculos = array_values($this->veiculos);
    }

    public function listarVeiculos()
    {
        foreach ($this->veiculos as $veiculo) {
            echo "- " . $veiculo->modelo . " | Placa: " . $veiculo->placa . "<br>";
        }
    }

    public function contarVeiculos()
    {
        return $this->quantidadeAtual;
    }

    public function verificarVagas()
    {
        return $this->quantidadeAtual < $this->capacidadeMaxima;
    }

    public function exibirDadosGaragem()
    {
        echo "<b>Nome da garagem: </b>" . $this->nomeGaragem . "<br>";
        echo "<b>Código da garagem: </b>" . $this->codigoGaragem . "<br>";
        echo "<b>Endereço: </b>" . $this->endereco . "<br>";
        echo "<b>Cidade: </b>" . $this->cidade . "<br>";
        echo "<b>Responsável: </b>" . $this->responsavel . "<br>";
        echo "<b>Capacidade máxima: </b>" . $this->capacidadeMaxima . "<br>";
        echo "<b>Quantidade atual: </b>" . $this->quantidadeAtual . "<br>";
        echo "<b>Telefone: </b>" . $this->telefone . "<br>";
        echo "<b>Status da garagem: </b>" . $this->statusGaragem . "<br>";

        echo "<b>Veículos cadastrados:</b><br>";
        $this->listarVeiculos();
    }
}