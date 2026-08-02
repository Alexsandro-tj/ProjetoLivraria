<?php
include_once "Livros.php";
include_once"Biblioteca.php";


$newLivro = new Livros("Biblia", "Torre de Vigia", "2018", 1000);
$newLivro2 = new Livros("Seja Feliz", "Torre de Vigia", "2025", 1001);


$novoLivro = new Biblioteca();
$novoLivro->cadastrarLivro($newLivro);
$novoLivro->cadastrarLivro($newLivro2);
$novoLivro->getLivros();
$resultado = $novoLivro->buscarPorTitulo("Seja Feliz");
if ($resultado) {
    echo "Livro encontrado: " . $resultado->titulo;
} else {
    echo "Livro não encontrado";
}
