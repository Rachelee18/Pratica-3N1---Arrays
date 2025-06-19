<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Exercício 16</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <nav>
        <a class="voltar" href="ex15.php">← Voltar exercício</a>
        <a class="proximo" href="ex17.php">Próximo exercício →</a>
    </nav>
    <div class="container">
        <h2>Exercício 16</h2>
        <div class="saida-php">
            <?php
            $caracteresPermitidos = ['a', 'b', 'c', '1', '2', '3', '!', '@'];
            $string = implode('', $caracteresPermitidos);
            echo "String base para senha: $string";
            ?>
        </div>
    </div>
</body>

</html>