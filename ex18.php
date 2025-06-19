<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Exercício 18</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <nav>
        <a class="voltar" href="ex17.php">← Voltar exercício</a>
        <a class="proximo" href="ex19.php">Próximo exercício →</a>
    </nav>
    <div class="container">
        <h2>Exercício 18</h2>
        <div class="saida-php">
            <?php
            $dadosSensor = [15.2, 28.9, 12.0, 35.5, 20.1, 40.0, 5.8];
            $resultado = array_filter($dadosSensor, function ($valor) {
                return $valor > 25.0;
            });
            echo "Leituras acima de 25.0:<br>";
            foreach ($resultado as $valor) {
                echo "$valor<br>";
            }
            ?>
        </div>
    </div>
</body>

</html>