<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Exercício 9</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <nav>
        <a class="voltar" href="ex08.php">← Voltar exercício</a>
        <a class="proximo" href="ex10.php">Próximo exercício →</a>
    </nav>
    <div class="container">
        <h2>Exercício 9</h2>
        <div class="saida-php">
            <form method="post">
                <label>IDs da Fonte A (separados por vírgula):</label><br>
                <input type="text" name="fonteA" required><br>
                <label>IDs da Fonte B (separados por vírgula):</label><br>
                <input type="text" name="fonteB" required><br>
                <button type="submit">Unificar</button>
            </form>

            <?php if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["fonteA"], $_POST["fonteB"])): ?>
                <div class="saida-php">
                    <?php
                    $a = array_map('trim', explode(",", $_POST["fonteA"]));
                    $b = array_map('trim', explode(",", $_POST["fonteB"]));
                    $todos = array_unique(array_merge($a, $b));

                    foreach ($todos as $id) {
                        echo "ID: " . htmlspecialchars($id) . "<br>";
                    }
                    ?>
                </div>
            <?php endif; ?>
        </div>

    </div>
</body>

</html>