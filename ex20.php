<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Exercício 20</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <nav>
        <a class="voltar" href="ex19.php">← Voltar exercício</a>
        <a class="proximo" href="index.php">Voltar para o Inicio →</a>
    </nav>
    <div class="container">
        <h2>Exercício 20</h2>
        <div class="saida-php">
            <?php
            $inventario = ['notebook' => 20, 'mouse' => 50, 'teclado' => 30];

            if (!array_key_exists('monitor', $inventario)) {
                $inventario['monitor'] = 15;
            }
            if (array_key_exists('notebook', $inventario)) {
                $inventario['notebook'] += 5;
            }

            foreach ($inventario as $produto => $quantidade) {
                echo "$produto: $quantidade unidades<br>";
            }
            ?>
        </div>
    </div>
</body>

</html>