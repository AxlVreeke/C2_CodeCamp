<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style.css">
    <title>Hello World!</title>
    <?php require_once'header.php' ?>
</head>
<body>
  <div class="container">
    <?php
    $t=time();
    ?>
    <p>
    <?php     
      echo($t . "<br>");
      echo(date("Y-m-d",$t));
    ?>
    </p>
  </div>
</body>
<footer>
    <p></p>
</footer>
</html>