<?php

// SSS: inicia a sessão
session_start();

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Relatório de Vendas</title>

</head>

<body>

    <!-- SSS: Título do relatório -->

    <h1>🎬 Cinema Online</h1>

    <h2>📊 Relatório de Vendas</h2>

    <hr>


    <!-- SSS: verifica se existem compras -->

    <?php if (isset($_SESSION['compras']) && count($_SESSION['compras']) > 0) { ?>


        <table borde="1" cellpadding="10">

            <tr>

                <th>Cliente</th>

                <th>Filme</th>

                <th>Quantidade</th>

                <th>Tipo de Ingresso</th>

                <th>Data</th>

                <th>Horário</th>

                <th>Desconto</th>

                <th>Total</th>

            </tr>


            <!-- SSS: percorre todas as compras -->

            <?php foreach ($_SESSION['compras'] as $compra) { ?>

                <tr>

                    <td>
                        <?php echo $compra['nome']; ?>
                    </td>

                    <td>
                        <?php echo $compra['filme']; ?>
                    </td>

                    <td>
                        <?php echo $compra['quantidade']; ?>
                    </td>

                    <td>
                        <?php echo $compra['tipo']; ?>
                    </td>

                    <td>
                        <?php echo $compra['data']; ?>
                    </td>

                    <td>
                        <?php echo $compra['horario']; ?>
                    </td>

                    <td>
                        R$
                        <?php
                        echo number_format(
                            $compra['desconto'],
                            2,
                            ',',
                            '.'
                        );
                        ?>
                    </td>

                    <td>

                        <strong>
                            R$
                            <?php
                            echo number_format(
                                $compra['valor'],
                                2,
                                ',',
                                '.'
                            );
                            ?>
                        </strong>

                    </td>

                </tr>

            <?php } ?>

        </table>


    <?php } else { ?>

        <!-- SSS: mensagem caso não exista nenhuma compra -->

        <h3>⚠️ Nenhuma venda registrada.</h3>

        <p>
            Ainda não existem compras para serem exibidas no relatório.
        </p>

    <?php } ?>


    <br><br>

    <!-- SSS: botão para voltar para a página principal -->

    <a href="desafio_03.php">
        ← Voltar para os filmes
    </a>

</body>

</html>