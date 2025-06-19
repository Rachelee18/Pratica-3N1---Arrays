<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Exercício 8</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <nav>
        <a class="voltar" href="ex07.php">← Voltar exercício</a>
        <a class="proximo" href="ex09.php">Próximo exercício →</a>
    </nav>
    <div class="container">
        <h2>Exercício 8</h2>
        <div class="saida-php">
            <?php
            $cartas = ["Ás de Espadas", "Rei de Copas", "Rainha de Ouros", "Valete de Paus", "10 de Copas"];
            echo "Antes do embaralhamento:<br>";
            foreach ($cartas as $carta)
                echo "$carta<br>";

            shuffle($cartas);
            echo "<br>Depois do embaralhamento:<br>";
            foreach ($cartas as $carta)
                echo "$carta<br>";
            ?>
        </div>

    </div>
</body>

</html>