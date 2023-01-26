<?php

include_once __DIR__ . '/partials/functions.php';

session_start();

if (isset($_GET["submitButton"])) { 
  header("Location: password.php"); 
  exit; 
};

$_SESSION['userNumber'] = !empty($_GET['userNumber']);


?>


<!DOCTYPE html>
<html lang="en">
  
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Strong Password Generator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/style.css">
    
  </head>
  
  <body>
    <main class="wrapper">
      <section class="container container_top">
        <div class="row">
          <div class="col-12">
            <h1>Strong Password Generator</h1>
          </div>
        </div>
      </section>
      <section class="container">
        <div class="row">
          <div class="col-12">
            <form action="./index.php" method="GET">
              <label for="userNumber">Inserisci la lunghezza della password desiderata</label>
              <input type="number" name="userNumber" id="userNumber">
              <button type="submit" name="submitButton">Invia</button>
            </form>
        </div>
      </div>
    </section>
  </main>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>