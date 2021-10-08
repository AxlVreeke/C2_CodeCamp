<?php require_once'head.php' ?>
<body>
<?php require_once'header.php' ?>
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
<?php require_once'footer.php' ?>
</body>
</html>