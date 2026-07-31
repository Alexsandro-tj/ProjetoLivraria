<?php
include_once"Livros.php";

class Biblioteca 
{
    public array $livros = [];


    public function cadastrarLivro(Livros $l)
    {
        $this->livros[] = $l;
        if ($this->livros) {

            echo "Livro cadastrado com sucesso!<br>";
        } else {
            echo "Livro Não Cadastrado!";
        }
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

    /*
buscar por título;
emprestar livro;
devolver livro;
remover livro; */
}
$newLivro = new Livros("Bíblia", "Torre de Vigia", "2018", 1000);
$newLivro2 = new Livros("Seja Feliz", "Torre de Vigia", "2025", 1001);


$novoLivro = new Biblioteca();
$novoLivro->cadastrarLivro($newLivro);
$novoLivro->cadastrarLivro($newLivro2);
$novoLivro->getLivros();
