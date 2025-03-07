<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP 02</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Trabalhando com números aleatórios</h1>
        <p>
            <?php
                $min = 0;
                $max = 100;

                $num = mt_rand($min, $max);

                // rand() = 1951 - Linear Congrential Generator
                // mt_rand() = 1997 - Mersenne Twister - MELHOR
                // random_int() gera números aleatórios criptograficamente seguros - MAIS LENTA

                echo "Gerando um número aleatório entre $min e $max... <br>O valor gerado foi <strong>$num</strong>";
            ?>
        </p>
        <button onclick="javascript:document.location.reload()">&#x1F504; Gerar Novamente</button>
    </main>
</body>
</html>