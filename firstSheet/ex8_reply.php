<?php
  function calculateNumbers($number) {
    for ($i=0; $i<=4; $i++) {
      $number = $number + 1;
      $squared = pow($number, 2);
      $cubed = pow($number, 3);

      echo "<tr>";
      echo "<td>$number</td>";
      echo "<td>$squared</td>";
      echo "<td>$cubed</td>";
      echo "</tr>";
    }
  }
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Exercise 8</title>
  </head>
  <body>
    <table>
      <tr>
        <th>Number</th>
        <th>Squared</th>
        <th>Cubed</th>
      </tr>
      <?php calculateNumbers($_POST['number']) ?>
    </table>
  </body>
</html>
