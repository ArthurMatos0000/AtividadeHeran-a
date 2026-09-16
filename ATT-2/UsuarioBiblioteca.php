<?php

class UsuarioBiblioteca
{
    public $nome;
    public $matricula;
    public $email;
    public $telefone;
    public $tipoUsuario;
    public $itensEmprestados = [];
    public $limiteEmprestimos;
    public $quantidadeEmprestimos;
    public $dataCadastro;
    public $statusUsuario;

    public function emprestarItem($item)
    {
        if ($this->verificarLimite()) {
            if ($item->verificarDisponibilidade() == "Item disponível para empréstimo.") {
                $this->itensEmprestados[] = $item;
                $this->quantidadeEmprestimos++;

                $item->alterarStatus("Emprestado");

echo "Item emprestado com sucesso!<br>";
} else {
echo "O item não está disponível.<br>";
}
} else {
echo "Limite de empréstimos atingido.<br>";
}
}

    public function devolverItem($item)
    {
        foreach ($this->itensEmprestados as $chave => $itemEmprestado) {
            if ($itemEmprestado == $item) {
                unset($this->itensEmprestados[$chave]);

    $this->itensEmprestados = array_values($this->itensEmprestados);

    $this->quantidadeEmprestimos--;

    $item->alterarStatus("Disponível");

    echo "Item devolvido com sucesso!<br>";
    return;
    }
    }

        echo "Esse item não está emprestado.<br>";
    }

    public function listarEmprestimos()
    {
        echo "<h3>Itens emprestados:</h3>";

        foreach ($this->itensEmprestados as $item) {
            echo "- " . $item->titulo . "<br>";
        }
    }

    public function verificarLimite()
    {
        if ($this->quantidadeEmprestimos < $this->limiteEmprestimos) {
            return true;
        } else {
            return false;
        }
    }

    public function alterarStatus($novoStatus)
    {
        $this->statusUsuario = $novoStatus;
    }

    public function exibirDadosUsuario()
    {
        echo "Nome: " . $this->nome . "<br>";
        echo "Matrícula: " . $this->matricula . "<br>";
        echo "E-mail: " . $this->email . "<br>";
        echo "Telefone: " . $this->telefone . "<br>";
        echo "Tipo de usuário: " . $this->tipoUsuario . "<br>";
        echo "Limite de empréstimos: " . $this->limiteEmprestimos . "<br>";
        echo "Quantidade de empréstimos: " . $this->quantidadeEmprestimos . "<br>";
        echo "Data de cadastro: " . $this->dataCadastro . "<br>";
        echo "Status do usuário: " . $this->statusUsuario . "<br>";
    }
}