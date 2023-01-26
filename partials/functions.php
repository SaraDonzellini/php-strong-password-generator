<?php



function randomPassword($passLength)
{
  $lettersAndSymbols = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890!@#$%^&*()';
  $pass = [];
    
    $alphaLength = strlen($lettersAndSymbols) - 1;
    for ($i = 0; $i < $passLength; $i++) {
      $n = random_int(0, $alphaLength);
      $pass[] = $lettersAndSymbols[$n];
    }
    return implode($pass);
  

};

