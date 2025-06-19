<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Exercício 15</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <nav>
        <a class="voltar" href="ex14.php">← Voltar exercício</a>
        <a class="proximo" href="ex16.php">Próximo exercício →</a>
    </nav>
    <div class="container">
        <h2>Exercício 15</h2>
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
                $melhor = max($sessoes);
                echo "$nome - Melhor resultado: $melhor<br>";
            }
            ?>
        </div>
    </div>
</body>

</html>