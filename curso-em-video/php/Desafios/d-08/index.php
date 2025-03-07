<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP 8</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $valor1 = $_GET['v1'] ?? 1;

    ?>
    <main>
        <h1>Informe um número</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="v1">Número</label>
            <input type="number" name="v1" id="v1" value="<?=$valor1?>">
            <input type="submit" value="Calcular Raízes">
        </form>
    </main>

    <section>
        <h2>Resultado Final</h2>
        <?php
            $raiz_2 = sqrt($valor1);
            $raiz_3 = $valor1 ** (1/3);

            echo "<p>Analisando o <strong>número $valor1</strong>, temos:</p>";
            echo "<ul><li>A sua raiz quadrada é <strong>". number_format($raiz_2, 3, ",", ".") ."</strong></li><li>A sua raiz cúbica é <strong>". number_format($raiz_3, 3, ",", ".") ."</strong></li></ul>"
        ?>
    </section>

</body>
</html>