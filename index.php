<!DOCTYPE html>
<html lang="en">
<head>
  <?php require_once'head.php' ?>
</head>
<header>
  <?php require_once'header.php' ?>
</header>
<body onload="startTime()">
<div class="container">
  <div class="live-time">
    <p><?php  $today = date("F j"); echo $today; ?></p>
    <div id="time"></div>
  </div>
</div>
<footer>
<?php require_once'footer.php' ?>
</footer>

</html>