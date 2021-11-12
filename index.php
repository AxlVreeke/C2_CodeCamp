<?php require_once "header.php" ?>
<style type="text/css"></style>
<body onload="startTime()" class="background-blue">
  <div class="container">

  

    <div class="index-cool">
      <div class="contact-info">
        <div class="contactinformatie">
          <div class="contact-info">
            <h1>Contact Info</h1>
            <p><b>Bedrijfnaam:</b> CodeCamp</p>
            <p><b>Adres:</b> Koestraat 1</p>
            <p><b>Postcode:</b> 5964BT Den bosch</p>
            <p><b>Telefoon:</b> ‍1300263322</p>
          </div>
          <div id="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2482.883021058965!2d5.009342715770261!3d51.515362079636375!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c6bc3dd18f2d1b%3A0x93e8d779423bc0e!2sKoestraat%201%2C%205133%20NC%20Riel!5e0!3m2!1snl!2snl!4v1636109438005!5m2!1snl!2snl" id="frame" loading="lazy"></iframe>
          </div>
        </div>
      </div>
    </div>

    <div class="live-time">
        <p><?php $today = date("F j");
            echo $today; ?></p>
        <div id="time"></div>
      </div>
    </div>
    <script src="js/toggle.js"></script>
  </div>
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#a2d9ff" fill-opacity="1" d="M0,64L24,96C48,128,96,192,144,224C192,256,240,256,288,250.7C336,245,384,235,432,202.7C480,171,528,117,576,122.7C624,128,672,192,720,186.7C768,181,816,107,864,96C912,85,960,139,1008,149.3C1056,160,1104,128,1152,128C1200,128,1248,160,1296,160C1344,160,1392,128,1416,112L1440,96L1440,320L1416,320C1392,320,1344,320,1296,320C1248,320,1200,320,1152,320C1104,320,1056,320,1008,320C960,320,912,320,864,320C816,320,768,320,720,320C672,320,624,320,576,320C528,320,480,320,432,320C384,320,336,320,288,320C240,320,192,320,144,320C96,320,48,320,24,320L0,320Z"></path></svg>

</body>

<?php require_once 'footer.php' ?>