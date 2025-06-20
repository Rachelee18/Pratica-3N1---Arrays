<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Exercício 19</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <nav>
        <a class="voltar" href="ex18.php">← Voltar exercício</a>
        <a class="proximo" href="ex20.php">Próximo exercício →</a>
    </nav>
    <div class="container">
        <h2>Exercício 19</h2>
        <div class="saida-php">
            <form method="post">
                <label>Fila inicial (um nome por linha):</label>
                <textarea name="fila" rows="5" required></textarea><br>
                <label>Novo no início:</label>
                <input type="text" name="primeiro"><br>
                <label>Novo no fim:</label>
                <input type="text" name="ultimo">
                <button type="submit">Atualizar</button>
            </form>

            <?php if ($_SERVER["REQUEST_METHOD"] === "POST"): ?>
                <div class="saida-php">
                    <?php
                    $fila = explode("\n", trim($_POST["fila"]));
                    if (!empty($_POST["primeiro"]))
                        array_unshift($fila, trim($_POST["primeiro"]));
                    if (!empty($_POST["ultimo"]))
                        array_push($fila, trim($_POST["ultimo"]));
                    foreach ($fila as $p)
                        echo htmlspecialchars($p) . "<br>";
                    ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</body>

</html>