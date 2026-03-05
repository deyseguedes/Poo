<?php

class Pedido{
    public $produto;
    public $valor;


    public function __construct($produto, $valor) {
        $this->produto = $produto;
        $this->valor = $valor;
    }
}

$pedido = new Pedido($_POST['produto'], $_POST['valor']);

echo "Produto: " . $pedido->produto . "<br>";
echo "Valor: " . $pedido->valor;