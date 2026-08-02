<?php
include_once "Livros.php";
class Biblioteca
{
    public array $livros = [];
    

    public function cadastrarLivro(Livros $l)
    {
        $this->livros[] = $l;
        echo "Livro cadastrado com sucesso! <br>";
    }

    public function getLivros()
    {
        foreach ($this->livros as $key) {
            echo "--------------------------<br>";
            echo "<strong>Titulo</strong>: {$key->titulo}<br>";
            echo "<strong>Autor</strong>: {$key->autor}<br>";
            echo "<strong>Ano</strong>: {$key->ano}<br>";
            echo "<strong>Isbn</strong>: {$key->isbn}<br>";
        }
    }
    public function buscarPorTitulo(string $buscaLivro)
    {
       
        foreach ($this->livros as $livro) {
            if ($livro->titulo === $buscaLivro) {
             return $livro;
            }
        }
    }

    /*
buscar por título;
emprestar livro;
devolver livro;
remover livro; */
}


?>