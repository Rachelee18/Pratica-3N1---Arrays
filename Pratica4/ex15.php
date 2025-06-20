<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Exercício 15</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <nav>
        <a class="voltar" href="ex14.php">← Voltar exercício</a>
        <a class="proximo" href="ex16.php">Próximo exercício →</a>
    </nav>
    <div class="container">
        <h2>Exercício 15</h2>
        <div class="saida-php">
            <form method="post">
                <label>Nome:</label>
                <input type="text" name="nome" required>
                <label>Resultados (separados por vírgula):</label>
                <input type="text" name="resultados" required>
                <button type="submit">Verificar</button>
            </form>

            <?php if ($_SERVER["REQUEST_METHOD"] === "POST"): ?>
                <div class="saida-php">
                    <?php
                    $nome = htmlspecialchars($_POST["nome"]);
                    $valores = array_map('floatval', explode(',', $_POST["resultados"]));
                    echo "$nome - Melhor resultado: " . max($valores);
                    ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</body>

</html>