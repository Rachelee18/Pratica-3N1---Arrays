<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Exercício 6</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <nav>
        <a class="voltar" href="ex05.php">← Voltar exercício</a>
        <a class="proximo" href="ex07.php">Próximo exercício →</a>
    </nav>
    <div class="container">
        <h2>Exercício 6</h2>
        <div class="saida-php">
            <?php
            $categoriasProdutos = ["Eletrodomésticos", "Roupas", "Brinquedos", "Livros", "Beleza"];
            sort($categoriasProdutos);
            echo "Ordem alfabética:<br>";
            foreach ($categoriasProdutos as $cat)
                echo "$cat<br>";

            rsort($categoriasProdutos);
            echo "<br>Ordem decrescente:<br>";
            foreach ($categoriasProdutos as $cat)
                echo "$cat<br>";
            ?>
        </div>
    </div>
</body>

</html>