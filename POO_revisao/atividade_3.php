<?php

class Filme {

    private $titulo;
    private $genero;
    private $duracao;
    private $assistido;

    public function __construct($titulo, $genero, $duracao) {
        $this->titulo = $titulo;
        $this->genero = $genero;
        $this->duracao = $duracao;
        $this->assistido = false;
    }

    public function marcarComoAssistido() {
        $this->assistido = true;
    }

    public function exibirInformacoes() {
        echo "Título: " . $this->titulo . "<br>";
        echo "Gênero: " . $this->genero . "<br>";
        echo "Duração: " . $this->duracao . " minutos<br>";
        echo $this->foiAssistido() . "<br><br>";
    }

    public function foiAssistido() {
        if ($this->assistido) {
            return "Este filme já foi assistido.";
        } else {
            return "Este filme ainda não foi assistido.";
        }
    }
}


$filme1 = new Filme("Coraline", "Terror", 100);
$filme2 = new Filme("Moana", "Ação", 107);

$filme1->marcarComoAssistido();

$filme1->exibirInformacoes();

$filme2->exibirInformacoes();

?>
