<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Exercício 14</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <nav>
        <a class="voltar" href="ex13.php">← Voltar exercício</a>
        <a class="proximo" href="ex15.php">Próximo exercício →</a>
    </nav>
    <div class="container">
        <h2>Exercício 14</h2>
        <div class="saida-php">
            <?php
            $registrosTreino = [
                ["João", [30, 45, 50]],
                ["Maria", [25, 35, 40]],
                ["Pedro", [20, 30, 35]]
            ];

            foreach ($registrosTreino as $aluno) {
                $nome = $aluno[0];
                $sessoes = $aluno[1];
                $media = array_sum($sessoes) / count($sessoes);
                echo "$nome - Média: " . number_format($media, 2) . "<br>";
            }
            ?>
        </div>
    </div>
</body>

</html>