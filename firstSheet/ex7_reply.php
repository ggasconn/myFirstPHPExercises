<?php
  function calculateNumber($number){
      for ($i=1; $i<=10; $i++) {
          $finalNumber = round($number*$i, 2);
          echo "<tr>";
          echo "<td>$i</td>";
          echo "<td>$finalNumber</td>";
          echo "</tr>";
      }
  }
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Exercise 7</title>
  </head>
  <body>
    <div class="container" align="center">
      <br />
      <table class="table text-center" style="width: 40%">
        <thead class="thead-dark">
        <tr>
          <th colspan="2">Multiplication Table - Number <?php echo $_POST['number']; ?></th>
        </tr>
        </thead>
        <?php calculateNumber($_POST['number']) ?>
      </table>
    </div>
  </body>
</html>
