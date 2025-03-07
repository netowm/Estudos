<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Conversor de Moedas</h1>
        <?php 
            $real = $_REQUEST["valor"] ?? 0;
            $cotação = 5.76;
            $dolar = $real / $cotação;

            // FORMATAÇÃO DE MOEDAS PADRÃO
            // echo "Seus R\$" . number_format($reais, 2, ",", ".") . "equivalem a US\$" . number_format($dolar, 2, ",", ".");

            // FORMATAÇÃO DE MOEDAS COM INTERCIONALIZAÇÃO
            // Biblioteca intl (Internallization PHP)

            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

            echo "<p>Seus " . numfmt_format_currency($padrao, $real, "BRL") . " equivalem a <strong>" . numfmt_format_currency($padrao, $dolar, "USD") . "</strong></p>";
        ?>
        <button onclick="javascript:history.go(-1)">&#x2B05; Voltar</button>
    </main>
</body>
</html>