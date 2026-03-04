<?php

//public -> acessível de qualquer lugar
//private -> acessível apenas dentro da classe
//protected -> acessível dentro da classe e por classes que herdam dela
class Usuario {
    public string $nome;
    public int $idade;
    public float $altura;

     public function apresentar() {
        echo "Meu nome é {$this->nome}, tenho {$this->idade} anos e minha altura é {$this->altura} metros.";
    }
}

$usuario1 = new Usuario();
$usuario1->nome = "João";
$usuario1->idade = 30;
$usuario1->altura = 1.75;

$usuario1->apresentar(); // Saída: Meu nome é João, tenho 30 anos e minha altura é 1.75 metros.
