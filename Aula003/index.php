<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula 002</title>
    </head>
    <body>
        <pre>
            <?php
            include_once 'Caneta.php';

            $c1 = new Caneta();
            $c1->modelo = "BIC Cristal";
            $c1->cor = "Azul";
            
            
            
            
            
            
            //$c1->ponta = 0.5;       ========== atributo PRIVATE =======
            //$c1->tampada = true;    ========== atributo PRIVATE =======

            
            
            
            
            
            $c1->rabiscar();

            $c1->tampar();
            
            var_dump($c1);

            $c1->destampar();
            
            var_dump($c1);
            ?>
        </pre>
    </body>
</html>
