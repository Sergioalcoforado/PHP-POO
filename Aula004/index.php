<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula 004</title>
    </head>
    <body>
        <pre>
            <?php
            include_once 'Caneta.php';

            $c1 = new Caneta();
            $c1->setModelo("BIC Cristal");
            $c1->setPonta(0.5);       // ========= atributo PRIVATE =======

            
            
            
            
            
            /*$c1->rabiscar();

            $c1->tampar();
            
            var_dump($c1);

            $c1->destampar();*/
            
            var_dump($c1);
            ?>
        </pre>
    </body>
</html>
