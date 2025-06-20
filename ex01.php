<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Exercício 1</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <nav>
        <a class="voltar" href="index.php">← Voltar para o Inicio</a>
        <a class="proximo" href="ex02.php">Próximo exercício →</a>
    </nav>
    <div class="container">

        <h2>Exercício 1 - Gerenciamento de Produtos</h2>

        <div class="saida-php">
            <?php
            $produtos = [
                ["Camisa Polo", "SKU001"],
                ["Calça Jeans", "SKU002"],
                ["Tênis Esportivo", "SKU003"],
                ["Boné Estiloso", "SKU004"],
                ["Relógio Digital", "SKU005"]
            ];
            foreach ($produtos as $produto) {
                echo "Produto: {$produto[0]} - SKU: {$produto[1]}<br>";
            }
            ?>
        </div>

    </div>
</body>

</html>
