<!DOCTYPE html>
<html lang="en">
<head>
  <?php require_once'head.php' ?>
</head>
<header>
  <?php require_once'header.php' ?>
</header>
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