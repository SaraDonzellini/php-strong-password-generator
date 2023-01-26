<?php



function randomPassword()
{
  $lettersAndSymbols = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890!@#$%^&*()';
  $pass = [];

  if (isset($_GET['userNumber'])) {
    
    $userNumber = $_GET['userNumber'];
    
    $alphaLength = strlen($lettersAndSymbols) - 1;
    for ($i = 0; $i < $userNumber; $i++) {
      $n = random_int(0, $alphaLength);
      $pass[] = $lettersAndSymbols[$n];
    }
    return implode($pass);
  }

};

