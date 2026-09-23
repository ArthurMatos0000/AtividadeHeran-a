<?php

include_once "Pessoa.php";
include_once "Paciente.php";
include_once "Medico.php";
include_once "Consulta.php";


// PACIENTE

$paciente = new Paciente();

$paciente->cadastrarPessoa("Lucas Amaro", "123.456.789-00");

$paciente->idade = 25;
$paciente->email = "amaro@email.com";
$paciente->telefone = "99999-1111";
$paciente->endereco = "Rua Central";
$paciente->cidade = "Mathias velho";
$paciente->estado = "CE";
$paciente->dataNascimento = "23/06/2009";
$paciente->sexo = "Masculino";

$paciente->numeroProntuario = "P001";
$paciente->tipoSanguineo = "O+";
$paciente->convenio = "Unimed";
$paciente->historicoMedico = "Sem histórico relevante.";
$paciente->peso = 70;
$paciente->altura = 1.75;
$paciente->statusPaciente = "Ativo";

$paciente->informarSintoma("Tristeza");
$paciente->informarSintoma("Em choque");

$paciente->adicionarAlergia("Nenhuma");
$paciente->registrarMedicamento("Trabalhar");


// MÉDICO

$medico = new Medico();

$medico->cadastrarPessoa("Dr. Bombozini Trostini", "332.334.321-00");

$medico->idade = 40;
$medico->email = "Bombozini@clinica.com";
$medico->telefone = "98888-2222";
$medico->endereco = "Farrapos";
$medico->cidade = "Porto Alegre";
$medico->estado = "CE";
$medico->dataNascimento = "20/08/1986";
$medico->sexo = "Masculino";

$medico->CRM = "12345-CE";
$medico->horarioAtendimento = "08:00 às 17:00";
$medico->salaAtendimento = "Sala 05";
$medico->telefoneProfissional = "98888-2222";
$medico->emailProfissional = "Bombozini@clinica.com";
$medico->anosExperiencia = 12;
$medico->valorConsulta = 250;
$medico->statusMedico = "Ativo";

$medico->definirEspecialidade("Dentista");


// CONSULTA

$consulta = new Consulta();

$consulta->codigoConsulta = "C001";
$consulta->dataConsulta = "20/09/2026";
$consulta->horarioConsulta = "10:00";
$consulta->motivo = "Dente caiu";
$consulta->statusConsulta = "Agendada";
$consulta->observacoes = "Fada do dente não pegou o dente do paciente";
$consulta->valorConsulta = 250;
$consulta->formaPagamento = "Pix";


// CONECTAR PACIENTE E MÉDICO

$consulta->agendarConsulta($paciente, $medico);


// EXIBIR DADOS

echo "<h2>Dados do Atendimento</h2>";

$consulta->exibirDadosConsulta();

echo "<hr>";

echo "<h3>Dados do Paciente</h3>";

$paciente->exibirDadosPaciente();

echo "<hr>";

echo "<h3>Dados do Médico</h3>";

$medico->exibirDadosMedico();

?>