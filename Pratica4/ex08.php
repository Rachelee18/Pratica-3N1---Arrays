<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Exercício 8</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <nav>
        <a class="voltar" href="ex07.php">← Voltar exercício</a>
        <a class="proximo" href="ex09.php">Próximo exercício →</a>
    </nav>
    <div class="container">
        <h2>Exercício 8</h2>
        <div class="saida-php">
            <form method="post">
                <label>Digite as cartas (uma por linha):</label><br>
                <textarea name="cartas" rows="6" required></textarea><br>
                <button type="submit">Embaralhar</button>
                </form>

                <?php if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["cartas"])): ?>
                    <div class="saida-php">
                        <?php
                        $cartas = explode("\n", trim($_POST["cartas"]));
                        $cartas = array_map('trim', $cartas);

                        echo "<strong>Antes do embaralhamento:</strong><br>";
                        foreach ($cartas as $c)
                            echo htmlspecialchars($c) . "<br>";

                        shuffle($cartas);
                        echo "<br><strong>Depois do embaralhamento:</strong><br>";
                        foreach ($cartas as $c)
                            echo htmlspecialchars($c) . "<br>";
                        ?>
                    </div>
                <?php endif; ?>
        </div>

    </div>
</body>

</html>