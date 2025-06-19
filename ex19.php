<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Exercício 19</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <nav>
        <a class="voltar" href="ex18.php">← Voltar exercício</a>
        <a class="proximo" href="ex20.php">Próximo exercício →</a>
    </nav>
    <div class="container">
        <h2>Exercício 19</h2>
        <div class="saida-php">
            <?php
            $filaAtendimento = ['João Silva', 'Maria Santos', 'Pedro Costa'];
            array_unshift($filaAtendimento, "Ana Oliveira");
            array_push($filaAtendimento, "Luiz Fernandes");

            echo "Fila atual:<br>";
            foreach ($filaAtendimento as $paciente) {
                echo "$paciente<br>";
            }
            ?>
        </div>
    </div>
</body>

</html>