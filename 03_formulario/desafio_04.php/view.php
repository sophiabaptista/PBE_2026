<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <!-- SSS: melhora a visualização no celular -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>desafio_03.php</title>

</head>

<body>

    <!-- SSS: identificação da logo -->
    <img src="logo.png" width="5%" alt="Logo do cinema">

    <h1>10% De Desconto</h1>

    <h2>Filmes Disponíveis</h2>

    <!-- SSS: formulário que envia os dados para logica.php -->
    <form action="logica.php" method="POST">

        <!-- SSS: DADOS DO CLIENTE -->

        <h2>Dados do Cliente</h2>

        <label>Nome do Cliente:</label>
        <br>

        <!-- SSS: campo obrigatório -->
        <input
            type="text"
            name="nome"
            placeholder="Digite seu nome"
            required
        >

        <br><br>


        <!-- SSS: FILMES -->

        <h2>Escolha seu filme</h2>

        <p>Diário de Uma Paixão</p>

        <img
            src="https://m.media-amazon.com/images/M/MV5BZjY0YzYwMDQtYmJjNi00Yzg5LWE3OTYtNDQzOGYxN2JiNGQ4XkEyXkFqcGc@._V1_.jpg"
            width="10%"
            alt="Diário de Uma Paixão"
        >

        <br><br>

        <!-- SSS: todos os filmes possuem name="filme" -->
        <input
            type="radio"
            name="filme"
            value="paixao"
            required
        >

        <label>Diário de Uma Paixão</label>

        <br><br>


        <p>Como Eu Era Antes de Você</p>

        <img
            src="https://br.web.img3.acsta.net/c_310_420/pictures/16/02/03/19/11/303307.jpg"
            width="10%"
            alt="Como Eu Era Antes de Você"
        >

        <br><br>

        <!-- SSS: continua usando name="filme" -->
        <input
            type="radio"
            name="filme"
            value="antes"
        >

        <label>Como Eu Era Antes de Você</label>

        <br><br>


        <p>Telefone Preto</p>

        <img
            src="https://m.media-amazon.com/images/S/pv-target-images/594cd6c2c681c0d3800cb63c96909c210af3e95d239fa3d2c737c92c27a4c5ee._UR2000,3000_.png"
            width="10%"
            alt="Telefone Preto"
        >

        <br><br>

        <!-- SSS: continua usando name="filme" -->
        <input
            type="radio"
            name="filme"
            value="telefone"
        >

        <label>Telefone Preto</label>

        <br><br>


        <!-- SSS: QUANTIDADE -->

        <label>Quantidade de ingressos:</label>
        <br>

        <!-- SSS: mínimo de 1 e máximo de 10 ingressos -->
        <input
            type="number"
            name="qtd_ingresso"
            min="1"
            max="10"
            required
        >

        <br><br>


        <!-- SSS: TIPO DE INGRESSO -->

        <h2>Tipo de Ingresso</h2>

        <!-- SSS: NÃO usar name="filme" aqui.
             O tipo de ingresso tem seu próprio grupo -->

        <input
            type="radio"
            name="tipo_ingresso"
            value="inteira"
            required
        >

        <label>Inteira</label>

        <br>

        <input
            type="radio"
            name="tipo_ingresso"
            value="meia"
        >

        <label>Meia</label>

        <br><br>


        <!-- SSS: DATA -->

        <h2>Data da Sessão</h2>

        <input
            type="date"
            name="data_sessao"
            required
        >

        <br><br>


        <!-- SSS: HORÁRIO -->

        <h2>Horário da Sessão</h2>

        <select name="horario" required>

            <option value="">
                Selecione um horário
            </option>

            <option value="14:00">
                14:00
            </option>

            <option value="16:30">
                16:30
            </option>

            <option value="19:00">
                19:00
            </option>

            <option value="21:30">
                21:30
            </option>

        </select>

        <br><br>


        <!-- SSS: OBSERVAÇÃO -->

        <h2>Observações</h2>

        <textarea
            name="observacao"
            rows="5"
            cols="40"
            placeholder="Digite alguma observação..."
        ></textarea>

        <br><br>


        <!-- SSS: INFORMAÇÃO SOBRE DESCONTO -->

        <h2>Desconto</h2>

        <p>
            🎁 Você receberá <strong>10% de desconto</strong>
            na compra dos ingressos.
        </p>

        <br>


        <!-- SSS: BOTÕES -->

        <button type="submit">
            Comprar Ingressos
        </button>

        <button type="reset">
            Limpar
        </button>

    </form>

    <br>

    <!-- SSS: RODAPÉ -->

    <hr>

    <footer>

        <p>
            🎬 Cinema Online - 2026
        </p>

        <p>
            Obrigado pela preferência!
        </p>

    </footer>

</body>

</html>