<?php

class Carro {
    public $marca;
    public $modelo;
    public $ano;

    public function __construct($marca, $modelo, $ano) {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->ano = $ano;
    }

    public function acelerar() {
        return "O carro {$this->marca} {$this->modelo} {$this->ano} está acelerando.";
    }

}


$meuCarro = new Carro("Toyota", "Corolla", 2020);


echo $meuCarro->acelerar(); // Saída: O carro Toyota Corolla está acelerando.

$meuCarro = new Carro("Honda", "Civic", 2021);

echo $meuCarro2->acelerar(); // Saída: O carro Honda Civic está acelerando.




?>