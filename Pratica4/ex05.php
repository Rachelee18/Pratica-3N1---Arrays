<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Exercício 5</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <nav>
        <a class="voltar" href="ex04.php">← Voltar exercício</a>
        <a class="proximo" href="ex06.php">Próximo exercício →</a>
    </nav>
    <div class="container">
        <h2>Exercício 5</h2>
        <div class="saida-php">
            <form method="post">
                <label>Espécies observadas (uma por linha):</label><br>
                <textarea name="especies" rows="5" required></textarea><br>
                <button type="submit">Verificar</button>
            </form>

            <?php if ($_SERVER["REQUEST_METHOD"] === "POST"): ?>
                <?php
                $lista = explode("\n", trim($_POST['especies']));
                $lista = array_map('trim', $lista);
                if (in_array("Pardal", $lista)) {
                    echo "Pardal já foi registrado.<br>";
                } else {
                    echo "Pardal ainda não foi registrado.<br>";
                }
                echo "<br><strong>Espécies únicas:</strong><br>";
                $unicas = array_unique($lista);
                foreach ($unicas as $esp) {
                    echo htmlspecialchars($esp) . "<br>";
                }
                ?>
            <?php endif; ?>
        </div>
    </div>
</body>

</html>