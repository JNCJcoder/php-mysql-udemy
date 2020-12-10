<?php

require_once "Pessoa.php";
require_once "Programador.php";

$uma_pessoa = new Programador("Diego", "PHP");
// $uma_pessoa->nome = "Diego";
// $uma_pessoa->site = "www.diegomariano.com";
// $uma_pessoa->falarNome();
// $uma_pessoa->falarSite();

//var_dump($uma_pessoa);

//$uma_pessoa->setNome("Diego");
echo $uma_pessoa->getNome();

# Constante

echo $uma_pessoa::ESPECIE;