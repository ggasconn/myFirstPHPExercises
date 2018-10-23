<?php
function calculateAge($birthDate) {
  $birthDate = date_create($birthDate);
  $nowDate = new DateTime();
  $daysDifference = $birthDate->diff($nowDate);

  $years = $daysDifference->y;
  $months = $daysDifference->m;
  $days = $daysDifference->d;

  echo "Now you are $years years, $months months and $days days";
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Exercise 10</title>
  </head>
  <body>
    <?php calculateAge($_POST['birthDate']) ?>
  </body>
</html>
