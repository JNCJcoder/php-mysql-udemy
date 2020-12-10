<?php

class Pessoa{
    protected $nome;
    //public $site;
    const ESPECIE = "Humana";

    public function __construct($novoNome){
        $this->nome = $novoNome;
    }
    
    // public function falarNome(){
    //     echo $this->nome;
    // }

    // public function falarSite(){
    //     echo $this->nome;
    // }

    public function setNome($novoNome){
        $this->nome = $novoNome;
    }

    public function getNome(){
        return $this->nome;
    }
}