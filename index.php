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
      <p><b>Bedrijfnaam:</b> CodeCamp</p>
      <p><b>Adres:</b> Koestraat 1</p>
      <p><b>Postcode:</b> 5964BT Den bosch</p>
      <p><b>Telefoon:</b> ‍1300263322</p>
    </div>
  </div>
</body>

<?php require_once 'footer.php' ?>