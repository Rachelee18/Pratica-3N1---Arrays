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
            <form method="post">
                <label>Preços antigos (um por linha):</label>
                <textarea name="precos" rows="6" required></textarea>
                <button type="submit">Calcular</button>
            </form>

            <?php if ($_SERVER["REQUEST_METHOD"] === "POST"): ?>
                <div class="saida-php">
                    <?php
                    $antigos = array_map('floatval', explode("\n", trim($_POST["precos"])));
                    $novos = array_map(fn($v) => $v * 1.10, $antigos);
                    echo "Preços antigos:<br>";
                    foreach ($antigos as $p)
                        echo "R$ " . number_format($p, 2, ',', '.') . "<br>";
                    echo "<br>Com aumento de 10%:<br>";
                    foreach ($novos as $p)
                        echo "R$ " . number_format($p, 2, ',', '.') . "<br>";
                    ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</body>

</html>