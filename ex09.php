<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Exercício 9</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <nav>
        <a class="voltar" href="ex08.php">← Voltar exercício</a>
        <a class="proximo" href="ex10.php">Próximo exercício →</a>
    </nav>
    <div class="container">
        <h2>Exercício 9</h2>
        <div class="saida-php">
            <?php
            $idsFonteA = [101, 105, 102];
            $idsFonteB = [103, 101, 106];
            $todosIds = array_unique(array_merge($idsFonteA, $idsFonteB));
            foreach ($todosIds as $id) {
                echo "ID: $id<br>";
            }
            ?>
        </div>

    </div>
</body>

</html>