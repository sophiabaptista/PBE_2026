<?php 

// SSS: Recebendo os dados do formulário
$nome = $_POST['nome'];
$filme = $_POST['filme'];
$qtd_ingresso = $_POST['qtd_ingresso'];
$tipo_ingresso = $_POST['tipo_ingresso'];
$data_sessao = $_POST['data_sessao'];
$horario = $_POST['horario'];
$observacao = $_POST['observacao'];


// SSS: Preço do ingresso
$preco_ingresso = 30.00;


// SSS: Calculando o valor de acordo com o tipo de ingresso
if ($tipo_ingresso == "meia") {

    $preco_ingresso = $preco_ingresso / 2;

}


// SSS: Calculando o valor total sem desconto
$total_sem_desconto = $preco_ingresso * $qtd_ingresso;


// SSS: Calculando 10% de desconto
$desconto = $total_sem_desconto * 0.10;


// SSS: Calculando o valor final
$total_final = $total_sem_desconto - $desconto;


// SSS: Transformando o nome do filme
if ($filme == "paixao") {

    $nome_filme = "Diário de Uma Paixão";

} elseif ($filme == "antes") {

    $nome_filme = "Como Eu Era Antes de Você";

} elseif ($filme == "telefone") {

    $nome_filme = "Telefone Preto";

} else {

    $nome_filme = "Filme não informado";

}


// SSS: Transformando o tipo de ingresso em texto
if ($tipo_ingresso == "inteira") {

    $nome_tipo = "Inteira";

} else {

    $nome_tipo = "Meia-entrada";

}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Resultado da Compra</title>

</head>

<body>

    <!-- SSS: Título -->

    <h1>🎬 Cinema Online</h1>

    <h2>Resumo da Compra</h2>

    <hr>


    <!-- SSS: Informações do cliente -->

    <h3>👤 Dados do Cliente</h3>

    <p>
        <strong>Nome:</strong>
        <?php echo htmlspecialchars($nome); ?>
    </p>


    <!-- SSS: Informações do filme -->

    <h3>🎥 Filme</h3>

    <p>
        <strong>Filme:</strong>
        <?php echo $nome_filme; ?>
    </p>

    <p>
        <strong>Data:</strong>
        <?php echo $data_sessao; ?>
    </p>

    <p>
        <strong>Horário:</strong>
        <?php echo $horario; ?>
    </p>


    <!-- SSS: Informações dos ingressos -->

    <h3>🎟️ Ingressos</h3>

    <p>
        <strong>Quantidade:</strong>
        <?php echo $qtd_ingresso; ?>
    </p>

    <p>
        <strong>Tipo:</strong>
        <?php echo $nome_tipo; ?>
    </p>

    <p>
        <strong>Preço por ingresso:</strong>
        R$ <?php echo number_format($preco_ingresso, 2, ',', '.'); ?>
    </p>


    <hr>


    <!-- SSS: Valores da compra -->

    <h3>💰 Valores</h3>

    <p>
        <strong>Total sem desconto:</strong>
        R$ <?php echo number_format($total_sem_desconto, 2, ',', '.'); ?>
    </p>

    <p>
        <strong>Desconto de 10%:</strong>
        R$ <?php echo number_format($desconto, 2, ',', '.'); ?>
    </p>

    <h2>
        Total a pagar:
        R$ <?php echo number_format($total_final, 2, ',', '.'); ?>
    </h2>


    <!-- SSS: Observação -->

    <?php if (!empty($observacao)) { ?>

        <h3>📝 Observação</h3>

        <p>
            <?php echo htmlspecialchars($observacao); ?>
        </p>

    <?php } ?>


    <hr>


    <!-- SSS: Mensagem final -->

    <h3>✅ Compra realizada com sucesso!</h3>

    <p>
        Obrigado pela compra,
        <strong><?php echo htmlspecialchars($nome); ?></strong>!
    </p>

    <p>
        Aproveite o filme! 🍿🎬
    </p>

    <br>

    <a href="desafio_03.php">
        ← Voltar para os filmes
    </a>

</body>

</html>