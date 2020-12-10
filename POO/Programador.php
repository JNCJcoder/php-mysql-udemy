<?php

class Programador extends Pessoa {
    private $linguagem;

    public function __construct($novoNome, $novaLinguagem){
        $this->nome = $novoNome;
        $this->linguagem = $novaLinguagem;

        echo "<br> Objeto ".__CLASS__." foi instanciado.";
    }

}