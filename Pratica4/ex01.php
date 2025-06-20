<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Exercício 1 - Gerenciamento de Produtos</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <nav>
        <a class="voltar" href="index.php">← Voltar para o Inicio</a>
        <a class="proximo" href="ex02.php">Próximo exercício →</a>
    </nav>
    <div class="container">
        <h2>Exercício 1</h2>

        <div class="saida-php">

            <form method="post">
                <?php for ($i = 0; $i < 5; $i++): ?>
                    <label>Nome do Produto <?= $i + 1 ?>:</label>
                    <input type="text" name="nome[]" required><br>
                    <label>SKU do Produto <?= $i + 1 ?>:</label>
                    <input type="text" name="sku[]" required><br><br>
                <?php endfor; ?>
                <button type="submit">Cadastrar Produtos</button>
            </form>

            <?php if ($_SERVER["REQUEST_METHOD"] === "POST"): ?>
                <div class="saida-php">
                    <?php
                    foreach ($_POST['nome'] as $i => $nome) {
                        echo "Produto: " . htmlspecialchars($nome) . " - SKU: " . htmlspecialchars($_POST['sku'][$i]) . "<br>";
                    }
                    ?>
                </div>
            <?php endif; ?>
        </div>

    </div>
</body>

</html>