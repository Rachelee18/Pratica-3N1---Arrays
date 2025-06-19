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
        <?php
        $especiesObservadas = ['Beija-flor', 'Canário', 'Bem-te-vi', 'Sabiá', 'Beija-flor', 'Coruja'];
        if (in_array("Pardal", $especiesObservadas)) {
            echo "Pardal já foi registrado.<br>";
        } else {
            echo "Pardal ainda não foi registrado.<br>";
        }
        $unicas = array_unique($especiesObservadas);
        foreach ($unicas as $especie) {
            echo "$especie<br>";
        }
        ?>
        </div>
    </div>
</body>

</html>