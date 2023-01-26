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

    <?php

    function randomPassword()
    {
      $lettersAndSymbols = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890!@#$%^&*()';
      $pass = []; 
      $alphaLength = strlen($lettersAndSymbols) - 1; 
      for ($i = 0; $i < $_GET['userNumber']; $i++) {
        $n = random_int(0, $alphaLength);
        $pass[] = $lettersAndSymbols[$n];
      }
      return implode($pass); 
    };

    echo randomPassword();

    ?>
  </form>
</body>

</html>