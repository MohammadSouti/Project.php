<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mohammad_Souti</title>
</head>
<body>
  <form action="#" method="post">

    <label for="day">لطفا روز مورد نظر را وارد کنید:</label>
    <input type="text" name="day">
    <input type="submit" value="submit" name="submit">

  </form>

<?php

function check_even_odd($day) {
  $odd_days = ['یک شنبه', 'سه شنبه', 'پنج شنبه'];
  $even_days = ['شنبه', 'دوشنبه', 'چهار شنبه', 'جمعه'];
  $day = trim($day);

  if (in_array($day, $odd_days)) {
    return 'فرد';
  } else if  (in_array($day, $even_days)) {
    return 'زوج';
  } else {
    return 'روز معتبر نیست';
  }
    
}


if (isset($_POST['submit'])) {
  $day = $_POST['day'];

  $result = check_even_odd($day);

  echo $result;
}
    

?>
</body>
</html>