<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Exercício 14</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <nav>
        <a class="voltar" href="ex13.php">← Voltar exercício</a>
        <a class="proximo" href="ex15.php">Próximo exercício →</a>
    </nav>
    <div class="container">
        <h2>Exercício 14</h2>
        <div class="saida-php">
            <form method="post">
                <label>Nome:</label>
                <input type="text" name="nome" required>
                <label>Resultados dos treinos (separados por vírgula):</label>
                <input type="text" name="resultados" required>
                <button type="submit">Calcular</button>
            </form>

            <?php if ($_SERVER["REQUEST_METHOD"] === "POST"): ?>
                <div class="saida-php">
                    <?php
                    $nome = htmlspecialchars($_POST["nome"]);
                    $valores = array_map('floatval', explode(',', $_POST["resultados"]));
                    $media = array_sum($valores) / count($valores);
                    echo "$nome - Média: " . number_format($media, 2);
                    ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</body>

</html>