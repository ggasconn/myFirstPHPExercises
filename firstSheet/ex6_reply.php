<?php
  function calculateMoney($userInput) {
    echo "Inserted value: $userInput €<br /><br />";

    $moneyOptions = [500,200,100,50,20,10,5,2,1,0.5,0.2,0.1,0.05,0.02,0.01];
    $result = [];

    foreach ($moneyOptions as $i) {
      if ($userInput < $i) {
        array_push($result, 0);
      }else {
        $division = floor($userInput/$i);
        $userInput = $userInput%$i;

        if ($division == 0) {
          array_push($result, 0);
        }else {
          array_push($result, $division);
        }
      }
    }

    $cont = 0;
    foreach ($result as $i) {
      if ($i != 0) {
        if ($cont <= 6) {
          echo "$moneyOptions[$cont]€ bills: $i<br />";
        }else {
          echo "$moneyOptions[$cont]€ coins: $i<br />";
        }
      }
      $cont = $cont+1;
    }
  }
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Exercise 6</title>
  </head>
  <body>
    <?php calculateMoney($_POST['money']) ?>
  </body>
</html>
