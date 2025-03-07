<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos PHP</title>
</head>
<body>
    <h1>Teste de tipos primitivos</h1>
    <?php 
        // 0x = hexadecimal 0b = binário 0 = Octal
        // $num = 010;
        //$v = 300;
        //var_dump($v)

        // $ = (tipo primitivo) - coerção (força o tipo)
        $num = (int) "950";
        var_dump($num);
    ?>
</body>
</html>