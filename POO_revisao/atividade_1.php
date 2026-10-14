<?php

class Aluno {

    private $nome;
    private $nota;

    public function __construct($nome, $nota = 0) {
        $this->nome = $nome;
        $this->nota = $nota;
    }

    public function getStatus() {
        if ($this->nota >= 6) {
            return "Aprovado";
        } else {
            return "Reprovado";
        }
    }
}

$aluno1 = new Aluno("Sophia", 8);

$aluno2 = new Aluno("Lavínia");

echo "<pre>";
print_r($aluno1);
print_r($aluno2);

echo "Situação de Sophia: " . $aluno1->getStatus() . "\n";
echo "Situação de Lavínia: " . $aluno2->getStatus();
echo "</pre>";
?>
   