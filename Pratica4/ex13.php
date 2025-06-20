<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Exercício 13</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <nav>
        <a class="voltar" href="ex12.php">← Voltar exercício</a>
        <a class="proximo" href="ex14.php">Próximo exercício →</a>
    </nav>
    <div class="container">
        <h2>Exercício 13</h2>
        <div class="saida-php">
            <form method="post">
                <label>Despesas do mês (uma por linha):</label>
                <textarea name="valores" rows="6" required></textarea>
                <button type="submit">Calcular Média</button>
            </form>

            <?php if ($_SERVER["REQUEST_METHOD"] === "POST"): ?>
                <div class="saida-php">
                    <?php
                    $valores = array_map('floatval', explode("\n", trim($_POST["valores"])));
                    $media = array_sum($valores) / count($valores);
                    echo "Média: R$ " . number_format($media, 2, ',', '.');
                    ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</body>

</html>