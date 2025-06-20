<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Exercício 18</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <nav>
        <a class="voltar" href="ex17.php">← Voltar exercício</a>
        <a class="proximo" href="ex19.php">Próximo exercício →</a>
    </nav>
    <div class="container">
        <h2>Exercício 18</h2>
        <div class="saida-php">
            <form method="post">
                <label>Dados do sensor (números separados por vírgula):</label>
                <input type="text" name="leituras" required>
                <button type="submit">Filtrar</button>
            </form>

            <?php if ($_SERVER["REQUEST_METHOD"] === "POST"): ?>
                <div class="saida-php">
                    <?php
                    $dados = array_map('floatval', explode(',', $_POST["leituras"]));
                    $filtrado = array_filter($dados, fn($v) => $v > 25);
                    foreach ($filtrado as $v)
                        echo "$v<br>";
                    ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</body>

</html>