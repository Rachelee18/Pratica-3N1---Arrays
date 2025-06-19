<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Exercício 4</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <nav>
        <a class="voltar" href="ex03.php">← Voltar exercício</a>
        <a class="proximo" href="ex05.php">Próximo exercício →</a>
    </nav>
    <div class="container">

        <h2>Exercício 4</h2>
        <div class="saida-php">
            <?php
            function ehPrimo($num)
            {
                if ($num < 2)
                    return false;
                for ($i = 2; $i <= sqrt($num); $i++) {
                    if ($num % $i == 0)
                        return false;
                }
                return true;
            }

            $numerosSorteados = [];
            for ($i = 0; $i < 10; $i++) {
                $numerosSorteados[] = rand(1, 60);
            }

            $quantidadePrimos = 0;
            foreach ($numerosSorteados as $numero) {
                if (ehPrimo($numero))
                    $quantidadePrimos++;
                echo "$numero ";
            }
            echo "<br>Quantidade de primos: $quantidadePrimos";
            ?>
        </div>
    </div>
</body>

</html>