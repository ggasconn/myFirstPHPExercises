<?php 
    function calcular_pesetas(&$ptas){
        $eur = $ptas / 166.386;
        printf("%.2f pesetas son %.2f euros.", $ptas, $eur);
    }
?>

<html>
    <head>
        <title>Ex_1</title>
    </head>
    <body>
        <?php calcular_pesetas($_REQUEST['pesetas']); ?>
    </body>
</html>
