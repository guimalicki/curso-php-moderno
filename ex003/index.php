<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variáveis e Constantes</title>
</head>
<body>
    <?php 
        echo "<h1>Variáveis e Constantes</h1>";
        $nome = "Guilherme";
        $sobrenome = "Malicki";
        const PAIS = "Brasil";
        echo "<p>Muito prazer, $nome $sobrenome! Você mora no " . PAIS . ".</p>";
    ?>
</body>
</html>