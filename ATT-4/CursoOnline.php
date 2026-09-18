<?php

class CursoOnline
{
    public $titulo;
    public $codigoCurso;
    public $descricao;
    public $cargaHoraria;
    public $nivel;
    public $instrutor;
    public $alunos = [];
    public $quantidadeAulas;
    public $preco;
    public $statusCurso;

    public function definirInstrutor($instrutor)
    {
        $this->instrutor = $instrutor;
    }

    public function adicionarAluno($aluno)
    {
        $this->alunos[] = $aluno;
    }

    public function removerAluno($aluno)
    {
        foreach ($this->alunos as $chave => $alunoCurso) {
            if ($alunoCurso === $aluno) {
                unset($this->alunos[$chave]);
            }
        }

        $this->alunos = array_values($this->alunos);
    }

    public function adicionarAula($aula)
    {
        $this->quantidadeAulas++;
    }

    public function alterarPreco($valor)
    {
        $this->preco = $valor;
    }

    public function exibirDadosCurso()
    {
      echo "<b>Título: </b>" . $this->titulo . "<br>";
echo "<b>Código do curso: </b>" . $this->codigoCurso . "<br>";
echo "<b>Descrição: </b>" . $this->descricao . "<br>";
echo "<b>Carga horária: </b>" . $this->cargaHoraria . "<br>";
echo "<b>Nível: </b>" . $this->nivel . "<br>";
echo "<b>Instrutor: </b>" . $this->instrutor->nome . "<br>";
echo "<b>Quantidade de aulas: </b>" . $this->quantidadeAulas . "<br>";
echo "<b>Preço: </b>R$ " . $this->preco . "<br>";
echo "<b>Status do curso: </b>" . $this->statusCurso . "<br>";

echo "<b>Alunos matriculados:</b><br>";

        foreach ($this->alunos as $aluno) {
            echo "- " . $aluno->nome . "<br>";
        }
    }
}