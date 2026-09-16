<?php

include_once __DIR__ . "/ItemBiblioteca.php";
include_once __DIR__ . "/Livro.php";
include_once __DIR__ . "/Revista.php";
include_once __DIR__ . "/UsuarioBiblioteca.php";


// ==========================
// LIVRO 1
// ==========================

$livro1 = new Livro();

$livro1->cadastrarItem("O Hobbit", "LIV001");
$livro1->anoPublicacao = 1937;
$livro1->editora = "HarperCollins";
$livro1->categoria = "Fantasia";
$livro1->quantidadePaginas = 310;
$livro1->idioma = "Português";
$livro1->status = "Disponível";
$livro1->localizacaoBiblioteca = "Estante A1";
$livro1->dataCadastro = "16/09/2026";

$livro1->definirAutor("J. R. R. Tolkien");
$livro1->ISBN = "9788595084741";
$livro1->genero = "Fantasia";
$livro1->numeroCapitulos = 19;
$livro1->edicao = "1ª edição";
$livro1->tipoCapa = "Dura";
$livro1->resumo = "Uma aventura pela Terra Média.";
$livro1->classificacaoIndicativa = "Livre";
$livro1->quantidadeExemplares = 3;
$livro1->exemplaresDisponiveis = 3;


// ==========================
// LIVRO 2
// ==========================

$livro2 = new Livro();

$livro2->cadastrarItem("Percy Jackson e o Ladrão de Raios", "LIV002");
$livro2->anoPublicacao = 2005;
$livro2->editora = "Intrínseca";
$livro2->categoria = "Aventura";
$livro2->quantidadePaginas = 400;
$livro2->idioma = "Português";
$livro2->status = "Disponível";
$livro2->localizacaoBiblioteca = "Estante A2";
$livro2->dataCadastro = "16/09/2026";

$livro2->definirAutor("Rick Riordan");
$livro2->ISBN = "9788580575399";
$livro2->genero = "Aventura";
$livro2->numeroCapitulos = 22;
$livro2->edicao = "1ª edição";
$livro2->tipoCapa = "Mole";
$livro2->resumo = "Um jovem descobre ser filho de um deus grego.";
$livro2->classificacaoIndicativa = "10 anos";
$livro2->quantidadeExemplares = 2;
$livro2->exemplaresDisponiveis = 2;


// ==========================
// REVISTA
// ==========================

$revista = new Revista();

$revista->cadastrarItem("Revista Ciência Hoje", "REV001");
$revista->anoPublicacao = 2026;
$revista->editora = "Instituto Ciência Hoje";
$revista->categoria = "Ciência";
$revista->quantidadePaginas = 80;
$revista->idioma = "Português";
$revista->status = "Disponível";
$revista->localizacaoBiblioteca = "Estante B1";
$revista->dataCadastro = "16/09/2026";

$revista->definirEdicao(120);
$revista->mesPublicacao = "Setembro";
$revista->alterarTema("Tecnologia");
$revista->periodicidade = "Mensal";
$revista->jornalistaResponsavel = "Marcos Silva";
$revista->secaoPrincipal = "Tecnologia";
$revista->codigoBarras = "789000000001";
$revista->publicoAlvo = "Jovens e adultos";
$revista->quantidadeMaterias = 15;
$revista->patrocinador = "Empresa Tech";


// ==========================
// USUÁRIO
// ==========================

$usuario = new UsuarioBiblioteca();

$usuario->nome = "Mauricio";
$usuario->matricula = "2026001";
$usuario->email = "mauricio@email.com";
$usuario->telefone = "99999-9999";
$usuario->tipoUsuario = "Aluno";
$usuario->limiteEmprestimos = 3;
$usuario->quantidadeEmprestimos = 0;
$usuario->dataCadastro = "16/09/2026";
$usuario->statusUsuario = "Ativo";


// ==========================
// EXIBIR LIVROS E REVISTA
// ==========================

echo "<h2>Dados do Livro 1</h2>";
$livro1->exibirDadosLivro();

echo "<hr>";

echo "<h2>Dados do Livro 2</h2>";
$livro2->exibirDadosLivro();

echo "<hr>";

echo "<h2>Dados da Revista</h2>";
$revista->exibirDadosRevista();

echo "<hr>";


// ==========================
// DADOS DO USUÁRIO
// ==========================

echo "<h2>Dados do Usuário</h2>";
$usuario->exibirDadosUsuario();

echo "<hr>";


// ==========================
// EMPRÉSTIMOS
// ==========================

echo "<h2>Empréstimos</h2>";

$usuario->emprestarItem($livro1);
$usuario->emprestarItem($livro2);

echo "<br>";

$usuario->listarEmprestimos();

echo "<hr>";


// ==========================
// DEVOLUÇÃO
// ==========================

echo "<h2>Devolução do Livro 1</h2>";

$usuario->devolverItem($livro1);

echo "<br>";


// ==========================
// LISTA ATUALIZADA
// ==========================

echo "<h2>Lista de empréstimos atualizada</h2>";

$usuario->listarEmprestimos();

echo "<hr>";


// ==========================
// VERIFICAR ESTOQUE
// ==========================

echo "<h2>Verificação de estoque</h2>";

echo "Livro 1: " . $livro1->verificarEstoque() . "<br>";
echo "Livro 2: " . $livro2->verificarEstoque() . "<br>";