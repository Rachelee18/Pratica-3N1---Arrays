<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Exercício 17</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <nav>
        <a class="voltar" href="ex16.php">← Voltar exercício</a>
        <a class="proximo" href="ex18.php">Próximo exercício →</a>
    </nav>
    <div class="container">
        <h2>Exercício 17</h2>
        <div class="saida-php">
            <form method="post">
                <label>Digite um texto:</label>
                <textarea name="texto" rows="5" required></textarea>
                <button type="submit">Analisar</button>
            </form>

            <?php if ($_SERVER["REQUEST_METHOD"] === "POST"): ?>
                <div class="saida-php">
                    <?php
                    $palavras = explode(" ", trim($_POST["texto"]));
                    foreach ($palavras as $p)
                        echo htmlspecialchars($p) . "<br>";
                    echo "<br>Total de palavras: " . count($palavras);
                    ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</body>

</html>