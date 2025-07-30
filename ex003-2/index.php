<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos em PHP</title>
</head>
<body>
    <h1>Teste de tipos primitivos</h1>
    <?php 
        // // 0x = hexadecimal
        // // 0b = binário
        // //0 = octal
        // $num = 300;
        // echo "O número é: $num <br>";
        // //3e2 é igual a 3 * 10^2 = 300

        // $v = 300;
        // var_dump($v); // Exibe o tipo e valor da variável

        // $num - (int) 3e2; // Converte o número para inteiro

        // $casado = false;
        // var_dump($casado); // Exibe o tipo e valor da variável
        // print "<br>O valor de casado é: $casado <br>";

        // $vet = [6, 2, 0, 3, 5];
        // var_dump($vet); // Exibe o tipo e valor do vetor
        
        class Pessoa {
            private String $nome;
        }

        $p = new Pessoa();
        var_dump($p); // Exibe o tipo e valor do objeto

    ?>
</body>
</html>