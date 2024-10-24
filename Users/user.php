<?php
require_once "../Connection/config.php";

$query = "SELECT * FROM `hospital`";
$result = mysqli_query($con, $query);


?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>

  <?php
  while ($fetch = mysqli_fetch_assoc($result)) {
    ?> 
    <div class="card" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title"><?PHP echo $fetch['Hospital_Name']?></h5>
      <h6 class="card-subtitle mb-2 text-body-secondary"><?PHP echo $fetch['Hospital_Address']?></h6>
      <a href="visithos.php?vishos=<?PHP echo $fetch['id']?>" class="card-link btn btn-primary">Visit Hospital</a>
    </div>
  </div>
  <?php  }  ?>  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>