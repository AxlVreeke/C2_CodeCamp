<?php require_once '../header.php'; ?>
<style type="text/css">
  body {
    background-color: #87CEFA }
  </style>
<div class="login">
  <div class="login-triangle"></div>
  
  <h2 class="login-header">Log in</h2>

  <form class="login-container">
    <p><input type="email" placeholder="Email"></p>
    <p><input type="password" placeholder="Password"></p>
    <!-- <p><input type="submit" value="Log in"></p> -->
    <a class="login_form" href="<?= $base_url ?>/resources/admin-pagina/admin.php">Log in</a>
  </form>
</div>


<?php require_once "../footer.php"; ?>