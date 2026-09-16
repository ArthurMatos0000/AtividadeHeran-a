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
    public $usuarioAtivo;

    public function cadastrarPessoa($nome, $email)
    {
        $this->nome = $nome;
        $this->email = $email;
    }

    public function alterarEmail($novoEmail)
    {
        $this->email = $novoEmail;
    }

    public function alterarTelefone($novoTelefone)
    {
        $this->telefone = $novoTelefone;
    }

    public function atualizarEndereco($novoEndereco)
    {
        $this->endereco = $novoEndereco;
    }

    public function alterarStatus($novoStatus)
    {
        $this->usuarioAtivo = $novoStatus;
    }

    public function exibirPerfil()
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
        echo "Usuário ativo: " . $this->usuarioAtivo . "<br>";
    }
}