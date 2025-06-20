<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Exercício 10</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <nav>
        <a class="voltar" href="ex09.php">← Voltar exercício</a>
        <a class="proximo" href="ex11.php">Próximo exercício →</a>
    </nav>
    <div class="container">
        <h2>Exercício 10</h2>
        <div class="saida-php">
            <form method="post">
                <label>Digite os nomes dos participantes (um por linha):</label><br>
                <textarea name="participantes" rows="6" required></textarea><br>
                <button type="submit">Filtrar</button>
            </form>

            <?php if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["participantes"])): ?>
                <div class="saida-php">
                    <?php
                    $participantes = explode("\n", trim($_POST["participantes"]));
                    $unicos = array_unique(array_map('trim', $participantes));

                    foreach ($unicos as $nome) {
                        echo htmlspecialchars($nome) . "<br>";
                    }
                    ?>
                </div>
            <?php endif; ?>
        </div>

    </div>
</body>

</html>