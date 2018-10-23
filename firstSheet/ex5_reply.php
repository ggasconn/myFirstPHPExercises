<?php
function calculateAge($year, $age) {
  $finalAge = (2020-$year)+$age;

  echo "<p>In 2020 you will be $finalAge</p>";
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php calculateAge($_POST['year'], $_POST['age']) ?>
  </body>
</html>
