<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Exercício 2</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <nav>
        <a class="voltar" href="ex01.php">← Voltar exercício</a>
        <a class="proximo" href="ex03.php">Próximo exercício →</a>
    </nav>
    <div class="container">

        <h2>Exercício 2</h2>
        <div class="saida-php">
            <?php
            $boletim = [
                "Português" => 8.5,
                "Matemática" => 6.0,
                "História" => 7.0,
                "Geografia" => 9.2
            ];

            foreach ($boletim as $disciplina => $nota) {
                $status = $nota >= 7.0 ? "Aprovado" : "Reprovado";
                echo "$disciplina: $nota - $status<br>";
            }
            ?>
        </div>
    </div>
</body>

</html>