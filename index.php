<?php require_once "header.php" ?>

<body onload="startTime()">
  <div class="container">
    <div class="live-time">
      <p><?php $today = date("F j");
          echo $today; ?></p>
      <div id="time"></div>
    </div>
  </div>
  <div class="index-cool">
    <div class="index-logo">
      <img src="<?= $base_url ?>/IMG/camp.png" alt="Index logo">
    </div>
    <div class="contactinformatie">
      <p><b>Bedrijfnaam:</b> 4S</p>
      <p><b>Adres:</b> Julianastraat 69</p>
      <p><b>Postcode:</b> 5964BT SCHOONHOVEN</p>
      <p><b>Telefoon:</b> 2155569420</p>
    </div>
  </div>
</body>

<?php require_once 'footer.php' ?>