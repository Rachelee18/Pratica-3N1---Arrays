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
            <form method="post">
                <label>Produto e preço (ex: Arroz=5.99):</label><br>
                <textarea name="produtos" rows="6" required></textarea><br>
                <button type="submit">Ordenar</button>
            </form>

            <?php if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["produtos"])): ?>
                <div class="saida-php">
                    <?php
                    $linhas = explode("\n", trim($_POST["produtos"]));
                    $precos = [];
                    foreach ($linhas as $linha) {
                        list($nome, $valor) = explode("=", trim($linha));
                        $precos[trim($nome)] = floatval($valor);
                    }

                    asort($precos);
                    foreach ($precos as $nome => $preco) {
                        echo htmlspecialchars($nome) . ": R$ " . number_format($preco, 2, ',', '.') . "<br>";
                    }
                    ?>
                </div>
            <?php endif; ?>
        </div>

    </div>
</body>

</html>