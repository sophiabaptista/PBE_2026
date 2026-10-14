<?php

class Pedido {
    private $cliente;
    private $valorItens;

    public function __construct($cliente) {
        $this->cliente = $cliente;
        $this->valorItens = 0;
    }

    public function adicionarItem($valor) {
        $this->valorItens += $valor;
    }

    public function getTotal() {
        return $this->valorItens;
    }

    public function exibirPedido() {
        echo "<h2>Pedido</h2>";
        echo "Cliente: " . $this->cliente . "<br>";
        echo "Subtotal dos itens: R$ " . number_format($this->valorItens, 2, ',', '.') . "<br>";
    }
}

class NotaFiscal {
    private $totalPedido;
    private $imposto;
    private $totalPagar;

    public function __construct($totalPedido, $imposto = 10) {
        $this->totalPedido = $totalPedido;
        $this->imposto = $imposto;
        $this->totalPagar = 0;
    }

    public function calcularTotal() {
        $valorImposto = $this->totalPedido * ($this->imposto / 100);
        $this->totalPagar = $this->totalPedido + $valorImposto;
    }

    public function exibirNota() {
        $valorImposto = $this->totalPedido * ($this->imposto / 100);

        echo "<h2>Nota Fiscal</h2>";
        echo "Subtotal: R$ " . number_format($this->totalPedido, 2, ',', '.') . "<br>";
        echo "Imposto aplicado: " . $this->imposto . "%<br>";
        echo "Valor do imposto: R$ " . number_format($valorImposto, 2, ',', '.') . "<br>";
        echo "Total a pagar: R$ " . number_format($this->totalPagar, 2, ',', '.') . "<br>";
    }
}

// Criando um pedido
$pedido = new Pedido("Maria");

// Adicionando itens ao pedido
$pedido->adicionarItem(100);
$pedido->adicionarItem(50);
$pedido->adicionarItem(30);

// Exibindo o pedido
$pedido->exibirPedido();

// Criando a nota fiscal com imposto de 10%
$nota = new NotaFiscal($pedido->getTotal(), 10);

// Calculando e exibindo a nota fiscal
$nota->calcularTotal();
$nota->exibirNota();

?>