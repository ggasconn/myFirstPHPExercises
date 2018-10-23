<?php
 function calculateAngle($angle) {
   // $degrees = rad2deg($angle);
   // $x = explode(".", $degrees);
   // $minutes = $x[1]*60;
   //
   // echo floor($degrees)."<br />";
   // echo $x[1]."<br />";
   // echo $minutes;
   //
   // #echo "$angle radiands equals to $degrees º  $minutes minutes  $seconds seconds";
   $degrees = rad2deg($angle);
   $x = $degrees - floor($degrees);
   $minutes = $x*60;
   $y = $minutes - floor($minutes);
   $seconds = $y*60;

   echo $angle." radians equals to ".floor($degrees)."º  ".floor($minutes)." minutes  ".$seconds." seconds";
 }
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Exercise 9</title>
  </head>
  <body>
    <?php calculateAngle($_POST['angle']) ?>
  </body>
</html>
