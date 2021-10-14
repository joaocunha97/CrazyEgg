<?php

class Produto{
    public $id;
    public $tipo;
    public $descricao;
    public $preco;
    public $imagemUrl;


function __construct($id, $tipo,$descricao,$preco,$imagemUrl){ 
    $this->id = $id;
    $this->tipo = $tipo;
    $this->descricao=$descricao;
    $this->preco=$preco;
    $this->imagemUrl=$imagemUrl;	
} 
}

?>