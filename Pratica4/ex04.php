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

            <form method="post">
                <label>Quantidade de números a sortear (1-60):</label>
                <input type="number" name="quantidade" min="1" max="60" required><br>
                <button type="submit">Sortear</button>
            </form>

            <?php if ($_SERVER["REQUEST_METHOD"] === "POST"): ?>
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
                    $quantidade = intval($_POST['quantidade']);
                    $numeros = [];
                    for ($i = 0; $i < $quantidade; $i++) {
                        $numeros[] = rand(1, 60);
                    }
                    $primos = 0;
                    foreach ($numeros as $n) {
                        if (ehPrimo($n))
                            $primos++;
                        echo $n . " ";
                    }
                    echo "<br>Primos encontrados: $primos";
                    ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</body>

</html>