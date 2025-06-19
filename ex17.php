<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Exercício 17</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <nav>
        <a class="voltar" href="ex16.php">← Voltar exercício</a>
        <a class="proximo" href="ex18.php">Próximo exercício →</a>
    </nav>
    <div class="container">
        <h2>Exercício 17</h2>
        <div class="saida-php">
            <?php
            echo "Frase: 'A programação PHP é fundamental para o desenvolvimento web'<br><br>";
            
            $textoAnalise = "A programação PHP é fundamental para o desenvolvimento web";
            $palavras = explode(" ", $textoAnalise);
            echo "Palavras:<br>";
            foreach ($palavras as $palavra) {
                echo "$palavra<br>";
            }
            echo "<br>Total de palavras: " . count($palavras);
            ?>
        </div>
    </div>
</body>

</html>