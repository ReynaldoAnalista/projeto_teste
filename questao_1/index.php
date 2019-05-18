<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Questão 1</title>
</head>
<body>
<div class="box">
    <?php
    for ($contagem = 0; $contagem <= 100; $contagem++) {

        switch ($contagem)
        {
            //EXIBE CASO MULTIPLO DE 3 E 5
            case ($contagem % 3 === 0) && ($contagem % 5 === 0):
                echo "FizzBuzz";
                break;
            //EXIBE CASO MULTIPLO DE 3
            case ($contagem % 3 === 0):
                echo "Fizz";
                break;
            //EXIBE CASO MULTIPLO DE 5
            case ($contagem % 5 === 0):
                echo "Buzz";
                break;
            //EXIBE CASO NÃO ENTRE EM NENHUMA REGRA
            default:
                echo $contagem;
        }
        echo '<br>';
    }
    ?>
</div>
</body>
</html>