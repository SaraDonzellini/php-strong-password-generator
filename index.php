<?php 

include_once __DIR__ . '/partials/functions.php'

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Strong Password Generator</title>
</head>

<body>
  <form action="./index.php" method="GET">
    <label for="userNumber">Inserisci la lungezza della password desiderata</label>
    <input type="number" name="userNumber" id="userNumber">
    <button type="submit">Invia</button>

    <p>
      <?php echo randomPassword(); ?>
    </p>
  </form>
</body>

</html>