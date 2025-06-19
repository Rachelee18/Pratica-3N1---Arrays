<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Exercício 3</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <nav>
        <a class="voltar" href="ex02.php">← Voltar exercício</a>
        <a class="proximo" href="ex04.php">Próximo exercício →</a>
    </nav>
    <div class="container">
        <h2>Exercício 3</h2>
        <div class="saida-php">
            <?php
            $livros = ["Dom Casmurro", "1984", "O Pequeno Príncipe", "A Revolução dos Bichos", "Harry Potter"];
            $livros[] = "O Senhor dos Anéis";
            unset($livros[2]);
            $livros = array_values($livros);
            foreach ($livros as $livro) {
                echo "$livro<br>";
            }
            ?>
        </div>
    </div>
</body>

</html>