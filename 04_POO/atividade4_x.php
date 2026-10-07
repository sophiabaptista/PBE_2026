<?php

class Pedido {
    var $numero;
    var $cliente;
    var $valor;
    var $status;

    function adicionarItem($valor) {
        $this->valor += $valor;
    }

    function cancelar() {
        $this->status = "Cancelado";
    }

    function finalizar() {
        $this->status = "Finalizado";
    }

    function exibirResumo() {
        echo "<p>";
        echo "Número: {$this->numero}<br>";
        echo "Cliente: {$this->cliente}<br>";
        echo "Valor: R$ " . number_format($this->valor, 2, ',', '.') . "<br>";
        echo "Status: {$this->status}";
        echo "</p>";
    }
}

// Criando dois objetos Pedido

$pedido1 = new Pedido();
$pedido1->numero = 1;
$pedido1->cliente = "João";
$pedido1->valor = 100;
$pedido1->status = "Aguardando";

$pedido2 = new Pedido();
$pedido2->numero = 2;
$pedido2->cliente = "Maria";
$pedido2->valor = 50;
$pedido2->status = "Aguardando";

// Testando métodos do pedido 1
$pedido1->adicionarItem(25);
$pedido1->adicionarItem(30);
$pedido1->finalizar();
$pedido1->exibirResumo();

// Testando métodos do pedido 2
$pedido2->adicionarItem(40);
$pedido2->cancelar();
$pedido2->exibirResumo();

?>