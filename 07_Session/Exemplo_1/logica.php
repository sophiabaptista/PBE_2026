<?php
session_start();

$_SESSION['nome'] = "Ana";
$_SESSION['curso'] = "Desenvolvimento de sistemas";

echo "<h4> PRIMEIRO PRINT </h4>";
echo "<pre>";
print_r($_SESSION);
echo "</pre>";

// criar uma lista e adicionando os valores
// igual o append do python
$_SESSION['turma'][] = [
    "nome" => "Maria",
    "curso" => "ADS"
];

echo "<h4> SEGUNDO PRINT </h4>";
echo "<pre>";
print_r($_SESSION);
echo "</pre>";

$_SESSION['turma'][] = [
    "nome" => "José",
    "curso" => "TI"
];

echo "<h4> TERCEIRO PRINT </h4>";
echo "<pre>";
print_r($_SESSION);
echo "</pre>";


?>
