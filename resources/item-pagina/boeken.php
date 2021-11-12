<?php require_once '../../header.php'; ?>
<?php
    require_once '../../backend/conn.php';
    $query = "SELECT * FROM boeken";
    $statement = $conn->prepare($query);
    $statement->execute();
    $boeken = $statement->fetchAll(PDO::FETCH_ASSOC);
?>
<body class="background-blue">
<div class="container_bc">
 <ul class="breadcrumb">
    <li class="breadcrumb-item"> <a href="<?= $base_url ?>/index.php">Home</a></li>
    <li class="breadcrumb-item"> <a href="#">Item Pagina</a></li>
    <li class="breadcrumb-item"> <a href="#">Boeken</a></li>
 </ul>
</div>
</body>
<div class="container blue">
  <div class="item scrollbar">
      <div class="item-title white">
        <h1>Boeken</h1>
      </div>
      <div class="item-text white">
        <p>
          Een boek in traditionele zin is een samengevoegde hoeveelheid papier met tekst, afbeeldingen of allebei.
          Daarnaast wordt met de term de betreffende informatie, of een soortgelijke verzameling informatie,
          aangeduid ('een boek schrijven', 'een boek downloaden').
          Voor de huidige boekvorm met pagina's, de codex, werd uitgevonden, bestond geschreven informatieoverdracht al in de vorm van inbeiteling op steen, boekrollen van papyrus of perkament, kleitabletten, stukken bot, leren vellen en dergelijke. Korte notities die niet bewaard hoefden te blijven, werden meestal op potscherven geschreven. Dit kwam zo omdat in ieder huishouden schalen, bekers en voorraadvaten van keramiek gebruikt werden en er geregeld wat brak zodat er aan scherven geen gebrek was.
        </p>
      </div>
      <div class="item-text-2 white">
        <h2>Beschikbare boeken:</h2>
        <p>
        <?php foreach($boeken as $boek): ?>
          <h4><?php echo $boek['title']; ?> - <?php echo $boek['author']; ?></h4>
          <p><?php echo $boek['description']; ?></p>
          <br>
        <?php endforeach; ?>
        </p>
      </div>
      <div class="img-boeken">
        <img src="<?= $base_url ?>/IMG/boeken.jpg" alt="boeken" class="img-item">
    </div>
  </div>
</div>
<?php require_once "../../footer.php"; ?>