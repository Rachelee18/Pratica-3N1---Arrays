<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Exercício 11</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <nav>
        <a class="voltar" href="ex10.php">← Voltar exercício</a>
        <a class="proximo" href="ex12.php">Próximo exercício →</a>
    </nav>
    <div class="container">
        <h2>Exercício 11</h2>
        <div class="saida-php">
            <?php
            $temperaturasDiarias = [32.5, 30.1, 28.0, 35.2, 27.8, 33.0, 29.4];
            $maxima = max($temperaturasDiarias);
            $minima = min($temperaturasDiarias);
            echo "Temperatura máxima: {$maxima}°C<br>";
            echo "Temperatura mínima: {$minima}°C";
            ?>
        </div>
    </div>
</body>

</html>