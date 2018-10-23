<?php 
    function fahrenheit(&$cels){
        $fhr = $cels * (9/5) + 32;
        printf("%.2f grados Celsius son %.2f grados Fahrenheit.", $cels, $fhr);
    }
?>

<html>
    <body>
        <?php fahrenheit($_REQUEST['celsius']); ?>
    </body>
</html>