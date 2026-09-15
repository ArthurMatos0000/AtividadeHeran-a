<?php

class Pessoa
{
    public $nome;
    public $idade;
    public $cpf;
    public $email;
    public $telefone;
    public $endereco;
    public $cidade;
    public $estado;
    public $dataNascimento;
    public $statusPessoa;

    public function cadastrarPessoa($nome, $idade, $cpf)
    {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->cpf = $cpf;
    }

    public function atualizarEmail($novoEmail)
    {
        $this->email = $novoEmail;
    }

    public function atualizarTelefone($novoTelefone)
    {
        $this->telefone = $novoTelefone;
    }

    public function alterarEndereco($novoEndereco)
    {
        $this->endereco = $novoEndereco;
    }

    public function alterarStatus($novoStatus)
    {
        $this->statusPessoa = $novoStatus;
    }

    public function exibirDadosPessoa()
    {
        echo "Nome: {$this->nome}<br>";
        echo "Idade: {$this->idade}<br>";
        echo "CPF: {$this->cpf}<br>";
        echo "E-mail: {$this->email}<br>";
        echo "Telefone: {$this->telefone}<br>";
        echo "Endereço: {$this->endereco}<br>";
        echo "Cidade: {$this->cidade}<br>";
        echo "Estado: {$this->estado}<br>";
        echo "Data de nascimento: {$this->dataNascimento}<br>";
        echo "Status: {$this->statusPessoa}<br>";
    }
}

?>