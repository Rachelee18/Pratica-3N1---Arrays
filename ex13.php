<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Exercício 13</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <nav>
        <a class="voltar" href="ex12.php">← Voltar exercício</a>
        <a class="proximo" href="ex14.php">Próximo exercício →</a>
    </nav>
    <div class="container">
        <h2>Exercício 13</h2>
        <div class="saida-php">
            <?php
            $despesasMensais = [1200.50, 850.75, 1500.00, 920.30, 1100.20];
            $media = array_sum($despesasMensais) / count($despesasMensais);
            echo "Média das despesas: R$ " . number_format($media, 2, ',', '.');
            ?>
        </div>
    </div>
</body>

</html>