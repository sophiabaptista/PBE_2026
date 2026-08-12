<?php
$maior = $numeros[0];
$numeros = [-5,5,10,12]; 

 foreach ($numeros as $numero) { 
    if($numero > $maior){
        $maior=$numero;
    } 
} 
    
echo "O maior número é = " . $maior; 
?> 