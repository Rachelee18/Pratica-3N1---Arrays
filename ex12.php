<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Exercício 12</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <nav>
        <a class="voltar" href="ex11.php">← Voltar exercício</a>
        <a class="proximo" href="ex13.php">Próximo exercício →</a>
    </nav>
    <div class="container">
        <h2>Exercício 12</h2>
        <div class="saida-php">
            <?php
            $precosAntigos = [15.50, 22.00, 30.75, 8.99];
            $precosNovos = array_map(function ($preco) {
                return $preco * 1.10;
            }, $precosAntigos);

            echo "Preços antigos:<br>";
            foreach ($precosAntigos as $preco) {
                echo "R$ " . number_format($preco, 2, ',', '.') . "<br>";
            }
            echo "<br>Preços com aumento de 10%:<br>";
            foreach ($precosNovos as $preco) {
                echo "R$ " . number_format($preco, 2, ',', '.') . "<br>";
            }
            ?>
        </div>
    </div>
</body>

</html>