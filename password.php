<?php

session_start();


?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Password Generated</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="stylesheet" href="styles/style.css">
</head>
<body>
  <main>
    <section class="container container_top">
      <div class="row">
        <div class="col-12">
          <p>
            Ecco la tua nuova password: <?php echo $_SESSION['password']  ?>
          </p>
        </div>
      </div>
    </section>
  </main>
</body>
</html>