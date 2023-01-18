<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mohammad_Souti</title>
</head>
<body style="background-color:cyan;">
  <form action="#" method="post">

    <label for="day">Please enter the desired day : </label>
    <input type="text" name="day">
    <input type="submit" value="submit" name="submit" id="day">

  </form>
  <hr>
  <br>

<?php

function check_even_odd($day) {
  $odd_days = ['sunday', 'tuesday', 'thursday'];
  $even_days = ['saturday', 'monday', 'wednesday', 'friday'];
  $day = trim($day);

  if (in_array($day, $odd_days)) {
    return 'odd';
  } else if  (in_array($day, $even_days)) {
    return 'even';
  } else {
    return 'invalid day';
  }
    
}


if (isset($_POST['submit'])) {
  $day = $_POST['day'];

  $result = check_even_odd($day);

  echo "Your desired day is an $result day.";
}
    

?>
</body>
</html>