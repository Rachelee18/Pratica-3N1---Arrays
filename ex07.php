<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Exercício 7</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <nav>
        <a class="voltar" href="ex06.php">← Voltar exercício</a>
        <a class="proximo" href="ex08.php">Próximo exercício →</a>
    </nav>
    <div class="container">
        <h2>Exercício 7</h2>
        <div class="saida-php">
            <?php
            $precosProdutos = [
                "Arroz" => 5.99,
                "Feijão" => 7.89,
                "Óleo" => 4.50,
                "Macarrão" => 3.75
            ];
            asort($precosProdutos);
            foreach ($precosProdutos as $produto => $preco) {
                echo "$produto: R$ " . number_format($preco, 2, ',', '.') . "<br>";
            }
            ?>
        </div>

    </div>
</body>

</html>