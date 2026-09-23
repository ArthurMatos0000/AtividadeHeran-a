<?php

class Pessoa
{
    public $nome;
    public $idade;
    public $CPF;
    public $cidade;
    public $estado;
    public $telefone;
    public $email;
    public $dataNascimento;
    public $nacionalidade;
    public $statusPessoa;

    public function cadastrarPessoa($nome, $idade)
    {
        $this->nome = $nome;
        $this->idade = $idade;
    }

    public function atualizarTelefone($telefone)
    {
        $this->telefone = $telefone;
    }

    public function alterarEmail($email)
    {
        $this->email = $email;
    }

    public function alterarCidade($cidade)
    {
        $this->cidade = $cidade;
    }

    public function alterarStatus($status)
    {
        $this->statusPessoa = $status;
    }

    public function exibirDadosPessoa()
    {
        echo "<b>Nome: </b>" . $this->nome . "<br>";
        echo "<b>Idade: </b>" . $this->idade . "<br>";
        echo "<b>CPF: </b>" . $this->CPF . "<br>";
        echo "<b>Cidade: </b>" . $this->cidade . "<br>";
        echo "<b>Estado: </b>" . $this->estado . "<br>";
        echo "<b>Telefone: </b>" . $this->telefone . "<br>";
        echo "<b>E-mail: </b>" . $this->email . "<br>";
        echo "<b>Data de nascimento: </b>" . $this->dataNascimento . "<br>";
        echo "<b>Nacionalidade: </b>" . $this->nacionalidade . "<br>";
        echo "<b>Status da pessoa: </b>" . $this->statusPessoa . "<br>";
    }
}