<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Exercício 16</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <nav>
        <a class="voltar" href="ex15.php">← Voltar exercício</a>
        <a class="proximo" href="ex17.php">Próximo exercício →</a>
    </nav>
    <div class="container">
        <h2>Exercício 16</h2>
        <div class="saida-php">
            <form method="post">
                <label>Caracteres permitidos (separados por vírgula):</label>
                <input type="text" name="caracteres" required>
                <button type="submit">Gerar</button>
            </form>

            <?php if ($_SERVER["REQUEST_METHOD"] === "POST"): ?>
                <div class="saida-php">
                    <?php
                    $chars = array_map('trim', explode(',', $_POST["caracteres"]));
                    echo "Senha base: <strong>" . htmlspecialchars(implode('', $chars)) . "</strong>";
                    ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</body>

</html>