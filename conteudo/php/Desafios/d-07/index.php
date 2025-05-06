<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP 7</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $valor1 = $_GET['v1'] ?? 0;

    ?>
    <main>
        <h1>Informe seu salário</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="v1">Salário (R$)</label>
            <input type="number" name="v1" id="v1" step="0.01" value="<?=$valor1?>">
            <p>Considerando o salário mínimo de <strong>R$1.518,00</strong></p>
            <input type="submit" value="Calcular">
        </form>
    </main>

        <section>
            <h2>Resultado Final</h2>
            <?php
                $padrao = numfmt_create("pt-BR", NumberFormatter::CURRENCY);

                $resultado = (int) ($valor1 / 1518);
                $resto = $valor1 % 1518;
                
                echo "<p>Quem recebe um salário de ". numfmt_format_currency($padrao, $valor1, "BRL") ." ganha <strong>$resultado salários mínimos</strong> + ". numfmt_format_currency($padrao, $resto, "BRL") .".</p>";
            ?>
        </section>

</body>
</html>