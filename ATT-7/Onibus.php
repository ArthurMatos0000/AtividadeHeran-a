<?php

include_once __DIR__ . "/Veiculo.php";

class Onibus extends Veiculo
{
    public $numeroLinha;
    public $capacidadePassageiros;
    public $passageirosAtuais;
    public $possuiAcessibilidade;
    public $itinerario;
    public $nomeMotorista;
    public $horarioSaida;
    public $horarioChegada;
    public $empresaResponsavel;
    public $quantidadeParadas;

    public function embarcarPassageiro($quantidade)
    {
        $this->passageirosAtuais += $quantidade;
    }

    public function desembarcarPassageiro($quantidade)
    {
        $this->passageirosAtuais -= $quantidade;

        if ($this->passageirosAtuais < 0) {
            $this->passageirosAtuais = 0;
        }
    }

    public function alterarItinerario($itinerario)
    {
        $this->itinerario = $itinerario;
    }

    public function definirHorarioSaida($horario)
    {
        $this->horarioSaida = $horario;
    }

    public function verificarLotacao()
    {
        if ($this->passageirosAtuais >= $this->capacidadePassageiros) {
            return "Lotado";
        }

        return "Ainda possui vagas";
    }

    public function exibirDadosOnibus()
    {
        echo "<b>Número da linha: </b>" . $this->numeroLinha . "<br>";
        echo "<b>Capacidade de passageiros: </b>" . $this->capacidadePassageiros . "<br>";
        echo "<b>Passageiros atuais: </b>" . $this->passageirosAtuais . "<br>";
        echo "<b>Possui acessibilidade: </b>" . $this->possuiAcessibilidade . "<br>";
        echo "<b>Itinerário: </b>" . $this->itinerario . "<br>";
        echo "<b>Nome do motorista: </b>" . $this->nomeMotorista . "<br>";
        echo "<b>Horário de saída: </b>" . $this->horarioSaida . "<br>";
        echo "<b>Horário de chegada: </b>" . $this->horarioChegada . "<br>";
        echo "<b>Empresa responsável: </b>" . $this->empresaResponsavel . "<br>";
        echo "<b>Quantidade de paradas: </b>" . $this->quantidadeParadas . "<br>";
    }
}