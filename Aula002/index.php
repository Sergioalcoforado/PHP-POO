<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula 002</title>
    </head>
    <body>
        <?php
        include_once 'Caneta.php';

        $c1 = new Caneta();
        $c1->modelo = "BIC";
        $c1->cor = "Azul";
        $c1->ponta = 0.5;
        $c1->tampada = true;

        $c1->rabiscar();

        $c1->destampar();

        $c1->rabiscar();

        var_dump($c1);
        ?>
    </body>
</html>
