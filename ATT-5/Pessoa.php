<?php

class Pessoa
{
    public $nome;
    public $idade;
    public $CPF;
    public $email;
    public $telefone;
    public $endereco;
    public $cidade;
    public $estado;
    public $dataNascimento;
    public $sexo;

    public function cadastrarPessoa($nome, $CPF)
    {
        $this->nome = $nome;
        $this->CPF = $CPF;
    }

    public function atualizarContato($email, $telefone)
    {
        $this->email = $email;
        $this->telefone = $telefone;
    }

    public function alterarEndereco($endereco)
    {
        $this->endereco = $endereco;
    }

    public function alterarCidade($cidade)
    {
        $this->cidade = $cidade;
    }

    public function validarCPF($CPF)
    {
        if (!empty($CPF)) {
            return "CPF informado.";
        } else {
            return "CPF não informado.";
        }
    }

    public function exibirDadosPessoa()
    {
        echo "Nome: " . $this->nome . "<br>";
        echo "Idade: " . $this->idade . "<br>";
        echo "CPF: " . $this->CPF . "<br>";
        echo "E-mail: " . $this->email . "<br>";
        echo "Telefone: " . $this->telefone . "<br>";
        echo "Endereço: " . $this->endereco . "<br>";
        echo "Cidade: " . $this->cidade . "<br>";
        echo "Estado: " . $this->estado . "<br>";
        echo "Data de nascimento: " . $this->dataNascimento . "<br>";
        echo "Sexo: " . $this->sexo . "<br>";
    }
}