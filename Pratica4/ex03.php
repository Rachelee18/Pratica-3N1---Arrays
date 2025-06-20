<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Exercício 3</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <nav>
        <a class="voltar" href="ex02.php">← Voltar exercício</a>
        <a class="proximo" href="ex04.php">Próximo exercício →</a>
    </nav>
    <div class="container">
        <h2>Exercício 3</h2>
        <div class="saida-php">

            <form method="post">
                <label>Digite os títulos dos livros (um por linha):</label><br>
                <textarea name="livros" rows="5" required></textarea><br>
                <label>Novo livro a ser adicionado:</label>
                <input type="text" name="novo" required><br>
                <button type="submit">Atualizar Estoque</button>
            </form>

            <?php if ($_SERVER["REQUEST_METHOD"] === "POST"): ?>
                <div class="saida-php">
                    <?php
                    $livros = explode("\n", trim($_POST['livros']));
                    $livros[] = $_POST['novo'];
                    unset($livros[2]);
                    $livros = array_values($livros);
                    foreach ($livros as $livro) {
                        echo htmlspecialchars($livro) . "<br>";
                    }
                    ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</body>

</html>