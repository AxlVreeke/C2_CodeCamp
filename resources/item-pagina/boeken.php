<?php require_once '../../header.php'; ?>
<div class="container">
  <div class="text">
    <div class="items">
      <div class="item-text">
        <h1>Boeken</h1>
        <p>
          Een boek in traditionele zin is een samengevoegde hoeveelheid papier met tekst, afbeeldingen of allebei.
          Daarnaast wordt met de term de betreffende informatie, of een soortgelijke verzameling informatie,
          aangeduid ('een boek schrijven', 'een boek downloaden').
          Het woord 'boek' is vermoedelijk afkomstig van het Germaanse woord voor beuk, boche.
          De omslagen van de eerste boeken werden namelijk gemaakt van een rechthoekig stuk (beuken)hout.
          Het Griekse woord biblia (boeken) is het meervoud van biblion dat oorspronkelijk 'papyrusje' betekende,
          het materiaal waarop in de oudheid meestal werd geschreven, en later werd gebruikt als aanduiding van papier,
          geschrift en boek(rol).
        </p>
      </div>
      <div class="img-boeken">
        <img src="<?= $base_url ?>/IMG/boeken.jpg" alt="boeken" class="img-item">
      </div>
    </div>
  </div>
</div>
<form>
 <input type="button" value="Go back!" onclick="history.back()">
</form>
<?php require_once "../../footer.php"; ?>