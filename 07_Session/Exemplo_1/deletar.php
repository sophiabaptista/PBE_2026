<?php
session_start();

// remover da lista 
//  remover apenas um item 
// unset($_SESSION['nome']); // remover uma posicao de sission
// unset($_SESSION['turma'][1]); // remover um item da lista 

session_destroy();

echo "<h4> Após Remover </h4>";
echo "<pre>";
print_r($_SESSION);
echo "</pre>";

echo "<a href='deletar.php'> Apagar </a>";
echo "<br>";
echo "<a href='view_relatorio.php'> Exibir Dados </a>";

?> 