<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Exercício 2</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <nav>
        <a class="voltar" href="ex01.php">← Voltar exercício</a>
        <a class="proximo" href="ex03.php">Próximo exercício →</a>
    </nav>
    <div class="container">

        <h2>Exercício 2</h2>
        <div class="saida-php">

            <form method="post">
                <label>Português:</label><input type="number" name="notas[Português]" step="0.1" required><br>
                <label>Matemática:</label><input type="number" name="notas[Matemática]" step="0.1" required><br>
                <label>História:</label><input type="number" name="notas[História]" step="0.1" required><br>
                <label>Geografia:</label><input type="number" name="notas[Geografia]" step="0.1" required><br>
                <button type="submit">Verificar</button>
            </form>

            <?php if ($_SERVER["REQUEST_METHOD"] === "POST"): ?>
                <div class="saida-php">
                    <?php
                    foreach ($_POST['notas'] as $disciplina => $nota) {
                        $status = $nota >= 7.0 ? "Aprovado" : "Reprovado";
                        echo "$disciplina: $nota - $status<br>";
                    }
                    ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</body>

</html>