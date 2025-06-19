<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Exercício 10</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <nav>
        <a class="voltar" href="ex09.php">← Voltar exercício</a>
        <a class="proximo" href="ex11.php">Próximo exercício →</a>
    </nav>
    <div class="container">
        <h2>Exercício 10</h2>
        <div class="saida-php">
            <?php
            $listaParticipantes = ['Carlos', 'Ana', 'João', 'Maria', 'João', 'Pedro', 'Maria', 'Ana'];
            $participantesUnicos = array_unique($listaParticipantes);
            foreach ($participantesUnicos as $nome) {
                echo "$nome<br>";
            }
            ?>
        </div>

    </div>
</body>

</html>