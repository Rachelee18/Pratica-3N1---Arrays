<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Exercício 20</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <nav>
        <a class="voltar" href="ex19.php">← Voltar exercício</a>
        <a class="proximo" href="index.php">Voltar para o Inicio →</a>
    </nav>
    <div class="container">
        <h2>Exercício 20</h2>
        <div class="saida-php">
            <form method="post">
                <label>Estoque atual (produto=quantidade, um por linha):</label>
                <textarea name="estoque" rows="6" required></textarea><br>
                <label>Adicionar produto:</label><input type="text" name="produto"><br>
                <label>Quantidade:</label><input type="number" name="quantidade">
                <button type="submit">Atualizar Estoque</button>
            </form>

            <?php if ($_SERVER["REQUEST_METHOD"] === "POST"): ?>
                <div class="saida-php">
                    <?php
                    $estoque = [];
                    $linhas = explode("\n", trim($_POST["estoque"]));
                    foreach ($linhas as $linha) {
                        list($p, $q) = explode('=', trim($linha));
                        $estoque[trim($p)] = intval($q);
                    }
                    if (!empty($_POST["produto"])) {
                        $p = trim($_POST["produto"]);
                        $estoque[$p] = ($estoque[$p] ?? 0) + intval($_POST["quantidade"]);
                    }
                    foreach ($estoque as $prod => $qtd) {
                        echo "$prod: $qtd unidades<br>";
                    }
                    ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</body>

</html>