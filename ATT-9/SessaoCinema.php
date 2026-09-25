<?php

class SessaoCinema
{
    public $codigoSessao;
    public $tituloFilme;
    public $sala;
    public $horario;
    public $dataSessao;
    public $capacidadeSala;
    public $clientes = [];
    public $funcionarioResponsavel;
    public $valorIngresso;
    public $statusSessao;

    public function adicionarCliente($cliente)
    {
        $this->clientes[] = $cliente;
    }

    public function removerCliente($cliente)
    {
        foreach ($this->clientes as $chave => $clienteSessao) {
            if ($clienteSessao === $cliente) {
                unset($this->clientes[$chave]);
                break;
            }
        }

        $this->clientes = array_values($this->clientes);
    }

    public function definirFuncionario($funcionario)
    {
        $this->funcionarioResponsavel = $funcionario;
    }

    public function alterarHorario($horario)
    {
        $this->horario = $horario;
    }

    public function verificarLotacao()
    {
        if (count($this->clientes) >= $this->capacidadeSala) {
            return "Sala lotada";
        }

        return "Ainda há vagas";
    }

    public function exibirDadosSessao()
    {
        echo "<b>Código da sessão: </b>" . $this->codigoSessao . "<br>";
        echo "<b>Título do filme: </b>" . $this->tituloFilme . "<br>";
        echo "<b>Sala: </b>" . $this->sala . "<br>";
        echo "<b>Horário: </b>" . $this->horario . "<br>";
        echo "<b>Data da sessão: </b>" . $this->dataSessao . "<br>";
        echo "<b>Capacidade da sala: </b>" . $this->capacidadeSala . "<br>";
        echo "<b>Funcionário responsável: </b>" . $this->funcionarioResponsavel->nome . "<br>";
        echo "<b>Valor do ingresso: </b>R$ " . $this->valorIngresso . "<br>";
        echo "<b>Status da sessão: </b>" . $this->statusSessao . "<br>";

        echo "<b>Clientes:</b><br>";

        foreach ($this->clientes as $cliente) {
            echo "- " . $cliente->nome . "<br>";
        }
    }
}