<?php

include_once __DIR__ . '/partials/functions.php';



?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <main>
    <section class="container">
      <div class="row">
        <div class="col-12">
          <p>
            Ecco la tua nuova password: <?php echo randomPassword() ?>
          </p>
        </div>
      </div>
    </section>
  </main>
</body>
</html>