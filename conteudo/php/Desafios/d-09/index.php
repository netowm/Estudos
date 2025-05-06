<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP 9</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $valor1 = $_GET['v1'] ?? 0;
        $valor2 = $_GET['v2'] ?? 0;
        $pesov1 = $_GET['pv1'] ?? 1;
        $pesov2 = $_GET['pv2'] ?? 1;

    ?>
    <main>
        <h1>Médias Aritméticas</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="v1">1° Valor</label>
            <input type="number" name="v1" id="v1" value="<?=$valor1?>">

            <label for="pv1">1° Peso</label>
            <input type="number" name="pv1" id="pv1" value="<?=$pesov1?>">

            <label for="v2">2° Valor</label>
            <input type="number" name="v2" id="v2" value="<?=$valor2?>">

            <label for="pv2">2° Peso</label>
            <input type="number" name="pv2" id="pv2" value="<?=$pesov2?>">

            <input type="submit" value="Calcular Médias">
        </form>
    </main>

    <section>
        <h2>Cálculo das Médias</h2>
        <?php
            $media_s = ($valor1 + $valor2) / 2;
            $media_p = (($valor1 * $pesov1)+($valor2 * $pesov2)) / ($pesov1 + $pesov2);

            echo "<p>Analisando os valores $valor1 e $valor2:</p>";
            echo "<ul><li>A <strong>Média Aritmética Simples</strong> entre os valores é igual a ". number_format($media_s, 2, ",", ".") .".</li><li>A <strong>Média Aritmética Ponderada</strong> com pesos $pesov1 e $pesov2 é igual a ". number_format($media_p, 2, ",", ".") . ".</li></ul>"
        ?>
    </section>

</body>
</html>