<?php

class Livros
{
    public string $titulo, $autor;
    public int $ano, $isbn;
    public bool $disponivel;



    public function __construct(string $titulo, string $autor, int $ano, int $isbn)
    {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->ano = $ano;
        $this->isbn = $isbn;
        $this->disponivel = true;
    }
}


?>