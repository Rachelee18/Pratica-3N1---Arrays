<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Exercício 11</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <nav>
        <a class="voltar" href="ex10.php">← Voltar exercício</a>
        <a class="proximo" href="ex12.php">Próximo exercício →</a>
    </nav>
    <div class="container">
        <h2>Exercício 11</h2>
        <div class="saida-php">
            <form method="post">
                <label>Digite as temperaturas (°C), separadas por vírgula:</label>
                <input type="text" name="temps" required>
                <button type="submit">Enviar</button>
            </form>

            <?php if ($_SERVER["REQUEST_METHOD"] === "POST"): ?>
                <div class="saida-php">
                    <?php
                    $temps = array_map('floatval', explode(',', $_POST["temps"]));
                    echo "Temperatura máxima: " . max($temps) . "°C<br>";
                    echo "Temperatura mínima: " . min($temps) . "°C";
                    ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</body>

</html>