<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP 11</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $preco_produto = $_GET['preco_p'] ?? 0;
        $perc_reajuste = $_GET['perc_re'] ?? 50;

    ?>
    <main>
        <h1>Reajustador de Preços</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="preco_p">Preço do Produto (R$)</label>
            <input type="number" name="preco_p" id="preco_p" step="0.01" value="<?=$preco_produto?>">

            <label for="perc_re">Qual será o percentual de reajuste? (<strong><span id="p">?</span>%</strong>)</label>
            <input type="range" name="perc_re" id="perc_re" value="<?=$perc_reajuste?>" min="0" max="100" step="1" oninput="mudaValor()">

            <input type="submit" value="Reajustar">
        </form>
    </main>

    <section>
        <h2>Resultado do Reajuste</h2>
        <?php
            $preco_novo = $preco_produto + ($preco_produto * ($perc_reajuste / 100));

            $padrao = numfmt_create("pt-BR", NumberFormatter::CURRENCY);

            echo "<p>O produto que custava ". numfmt_format_currency($padrao, $preco_produto, "BRL") .", com <strong>$perc_reajuste% de aumento</strong> vai passar a custar <strong>". numfmt_format_currency($padrao, $preco_novo, "BRL") ."</strong> a partir de agora.</p>";
        ?>
    </section>
    <script>
        // Declarações automáticas
        mudaValor() 

        function mudaValor() {
            p.innerText = perc_re.value;
        }
    </script>
</body>
</html>