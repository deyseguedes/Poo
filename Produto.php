<?php

class Produto {
    public string $nome;

    public float $preco;
    

    public function __construct($nome, $preco) {
        $this->nome = $nome;
        $this->preco = $preco;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setPreco($preco) {
        $this->preco = $preco;
    }
    
    public function getPreco() {
        return $this->preco;
    }
}

$produto1 = new Produto("Notebook", 2500.00);

$produto1->setNome("Smartphone");

$produto1->setPreco(1500.00);

echo $produto1->getNome();
echo "<br>";
echo $produto1->getPreco();

var_dump($produto1);