<?php
$numero = $_POST['numero'];
$numero = $_POST['numero2'];
$numero = $_POST['numero'];

echo $numero . "<br>";
echo $numero2 . "<br>";
echo $operacao . "<br>";

if($operacao == "som"){
    echo $numero + $numero2;
}elseif($operacao == "sub"){
    echo $numero - $numero2;
}elseif($operacao == "mult"){
    echo $numero * $numero2;
}elseif($operacao == "div"){
    if($numero2 == 0){
        echo "Número não pode ser dividido por 0";
    }else{
        echo$numero/$numero2;
    
    }
}else{
    echo"Selecione uma operação";
}

