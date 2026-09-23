<?php

class Pessoa {

    public $nome;
    public $idade;
    public $CPF;
    public $email;
    public $telefone;
    public $endereco;
    public $cidade;
    public $estado;
    public $dataNascimento;
    public $statusPessoa;


    public function cadastrarPessoa($nome, $idade, $CPF) {

        $this->nome = $nome;
        $this->idade = $idade;
        $this->CPF = $CPF;

    }


    public function atualizarEmail($novoEmail) {

        $this->email = $novoEmail;

    }


    public function atualizarTelefone($novoTelefone) {

        $this->telefone = $novoTelefone;

    }


    public function alterarEndereco($novoEndereco) {

        $this->endereco = $novoEndereco;

    }


    public function alterarStatus($novoStatus) {

        $this->statusPessoa = $novoStatus;

    }


    public function exibirDadosPessoa() {

echo "<b>Nome: </b>" . $this->nome . "<br>";
echo "<b>Idade: </b>" . $this->idade . "<br>";
echo "<b>CPF: </b>" . $this->CPF . "<br>";
echo "<b>E-mail: </b>" . $this->email . "<br>";
echo "<b>Telefone: </b>" . $this->telefone . "<br>";
echo "<b>Endereço: </b>" . $this->endereco . "<br>";
echo "<b>Cidade: </b>" . $this->cidade . "<br>";
echo "<b>Estado: </b>" . $this->estado . "<br>";
echo "<b>Data de nascimento: </b>" . $this->dataNascimento . "<br>";
echo "<b>Status: </b>" . $this->statusPessoa . "<br>";

    }

}

?>