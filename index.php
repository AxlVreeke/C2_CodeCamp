<?php require_once "header.php" ?>
<style type="text/css">
  body {
    background-color: #87CEFA }
  </style>
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
      <button class="map_zoom"id="toggle">Vergroot Map</button>
      <div id="map">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2482.883021058965!2d5.009342715770261!3d51.515362079636375!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c6bc3dd18f2d1b%3A0x93e8d779423bc0e!2sKoestraat%201%2C%205133%20NC%20Riel!5e0!3m2!1snl!2snl!4v1636109438005!5m2!1snl!2snl" id="frame" loading="lazy"></iframe>      </div>
    </div>
  </div>
  <script src="js/toggle.js"></script>
</body>

<?php require_once 'footer.php' ?>