<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP 10</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $ano_atual = date("Y");
        $ano_nasc = $_GET['a_nasc'] ?? 2000;
        $ano_idade = $_GET['a_idade'] ?? $ano_atual;

    ?>
    <main>
        <h1>Calculando a sua idade</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="a_nasc">Em que ano você nasceu?</label>
            <input type="number" name="a_nasc" id="a_nasc" value="<?=$ano_nasc?>">

            <label for="a_idade">Quer saber sua idade em que ano? (atualmente estamos em <?php echo "<strong>$ano_atual</strong>"?>)</label>
            <input type="number" name="a_idade" id="a_idade" value="<?=$ano_idade?>">

            <input type="submit" value="Qual será minha idade?">
        </form>
    </main>

    <section>
        <h2>Resultado</h2>
        <?php
            $idade_atual = $ano_idade - $ano_nasc;

            echo "<p>Quem nasceu em $ano_nasc vai ter <strong>$idade_atual anos</strong> em $ano_idade!</p>";
        ?>
    </section>

</body>
</html>