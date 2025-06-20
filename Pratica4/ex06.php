<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Exercício 6</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <nav>
        <a class="voltar" href="ex05.php">← Voltar exercício</a>
        <a class="proximo" href="ex07.php">Próximo exercício →</a>
    </nav>
    <div class="container">
        <h2>Exercício 6</h2>
        <div class="saida-php">
            <form method="post">
                <label>Digite as categorias (uma por linha):</label><br>
                <textarea name="categorias" rows="6" required></textarea><br>
                <button type="submit">Ordenar Categorias</button>
            </form>

            <?php if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["categorias"])): ?>
                <div class="saida-php">
                    <?php
                    $categorias = explode("\n", trim($_POST["categorias"]));
                    $categorias = array_map('trim', $categorias);

                    echo "<strong>Ordem alfabética:</strong><br>";
                    sort($categorias);
                    foreach ($categorias as $cat)
                        echo htmlspecialchars($cat) . "<br>";

                    echo "<br><strong>Ordem decrescente:</strong><br>";
                    rsort($categorias);
                    foreach ($categorias as $cat)
                        echo htmlspecialchars($cat) . "<br>";
                    ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</body>

</html>