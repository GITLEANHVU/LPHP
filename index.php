<?php
  $name = "leanhvu";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>my first PHP file</title>

  <style>
  body>h1 {
    text-align: center;
  }
  </style>
</head>

<body>
  <h1>
    My name is
    <?php
      echo $name;
    ?>
  </h1>


</body>

</html>