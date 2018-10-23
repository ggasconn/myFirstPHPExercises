<?php 
    function long($radius){
        $long = $radius * 2 * pi();
        printf("El perímetro de la circunferencia es %.5f.\n", $long);
    }
    function area($radius){
        $area = ($radius ** 2) * pi();
        printf("El área del círculo es %.5f.", $area);
    }
?>

<html>
    <body>
        <?php long($_REQUEST['radius']);
            area($_REQUEST['radius']);
        ?>
    </body>
</html>