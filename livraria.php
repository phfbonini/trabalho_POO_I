<?php
class Livro {
    private $titulo;
    private $autor;
    private $editora;
    private $preco;
    private $desconto;
    private $estoque;
    
    public function __construct($titulo, $autor, $editora, $preco, $desconto, $estoque) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->editora = $editora;
        $this->preco = $preco;
        $this->desconto = $desconto;
        $this->estoque = $estoque;
    }

    public function getTitulo() {
        return $this->titulo;
    }

    public function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    public function getAutor() {
        return $this->autor;
    }

    public function setAutor($autor) {
        $this->autor = $autor;
    }

    public function getEditora() {
        return $this->editora;
    }

    public function setEditora($editora) {
        $this->editora = $editora;
    }

    public function getPreco() {
        return $this->preco;
    }

    public function setPreco($preco) {
        $this->preco = $preco;
    }

    public function getDesconto() {
        return $this->desconto;
    }

    public function setDesconto($desconto) {
        $this->desconto = $desconto;
    }

    public function getEstoque() {
        return $this->estoque;
    }

    public function setEstoque($estoque) {
        $this->estoque = $estoque;
    }
}
?>