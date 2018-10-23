<!-- F = G (mM/d**2); -->

<?php
    function fuerza_gravitacional($dist, $mass1, $mass2){
        $const_grav = 6.67e-11;
        $force = $const_grav * (($mass1 * $mass2) / $dist ** 2);
        printf("La fuerza gravitacional es de %g Newtons.", $force);
    }
?>

<html>
    <body>
<?php fuerza_gravitacional($_REQUEST['dist'], $_REQUEST['mass1'], $_REQUEST['mass2']);
?>
    </body>
</html>