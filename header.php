<?php require_once 'backend/config.php'; ?>

<!DOCTYPE html>
<html lang="nl">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CodeCamp</title>
  <link rel="stylesheet" type="text/css" href="<?= $base_url ?>/CSS/style.css">
</head>

<body>
  <header>
    <nav>
      <div class="header-container">
        <div class="img-nav">
          <img src="<?= $base_url ?>/IMG/logo.png" class="logo-codecamp" alt="logo">
        </div>
        <div class="buttons-nav">
          <div class="dropdown">
            <a href="<?= $base_url ?>/index.php">
              <button class="button_home" type="button"><b>Home</b></button>
            </a>
          </div>
          <div class="dropdown">
            <button class="dropbtn"><b>Songteksten</b>
              <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
              <a href="<?= $base_url ?>/resources/song-pagina/bohemian-rhapsody.php">Bohemian rhapsody</a>
              <a href="<?= $base_url ?>/resources/song-pagina/killer-queen.php">Killer queen</a>
              <a href="<?= $base_url ?>/resources/song-pagina/madness.php">Madness</a>
              <a href="<?= $base_url ?>/resources/song-pagina/plug-in-baby.php">Plug in baby</a>
              <a href="<?= $base_url ?>/resources/song-pagina/transylvia.php">Transylvia</a>
              <a href="<?= $base_url ?>/resources/song-pagina/uprisingMuse.php">Uprising Muse</a>
              <a href="<?= $base_url ?>/resources/song-pagina/uprisingMyBaby.php">Uprising My Baby</a>
              <a href="<?= $base_url ?>/resources/song-pagina/we-are-the-champions.php">we are the champions</a>
            </div>
          </div>
          <div class="dropdown">
            <button class="dropbtn"><b>Voorwerpen</b>
              <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
              <a href="<?= $base_url ?>/resources/item-pagina/boeken.php">Boeken</a>
              <a href="<?= $base_url ?>/resources/item-pagina/cirkelzagen.php">Cirkel zagen</a>
              <a href="<?= $base_url ?>/resources/item-pagina/hamers.php">Hamers</a>
              <a href="<?= $base_url ?>/resources/item-pagina/kettingzagen.php">Kettingzagen</a>
            </div>
          </div>
          <ul class="top-level-menu">
            <li>
              <a class="font-color" href="#">Dranken</a>
              <ul class="second-level-menu">
                <li>
                  <a href="#" class="font-color">Koude Dranken</a>
                  <ul class="third-level-menu">
                    <li><a class="font-color" href="<?= $base_url ?>/resources/dranken-pagina/frisdrank/cola.php">Cola</a></li>
                    <li><a class="font-color" href="<?= $base_url ?>/resources/dranken-pagina/frisdrank/up.php">Up</a></li>
                    <li><a class="font-color" href="<?= $base_url ?>/resources/dranken-pagina/frisdrank/sinas.php">Sinas</a></li>
                  </ul>
                </li>
                <li>
                  <a class="font-color" href="#">Warme Dranken</a>
                  <ul class="third-level-menu">
                    <li><a class="font-color" href="<?= $base_url ?>/resources/dranken-pagina/warme-dranken/koffie.php">Koffie</a></li>
                    <li><a class="font-color" href="<?= $base_url ?>/resources/dranken-pagina/warme-dranken/latte.php">Latte</a></li>
                    <li><a class="font-color" href="<?= $base_url ?>/resources/dranken-pagina/warme-dranken/thee.php">Thee</a></li>
                  </ul>
                </li>
              </ul>
            </li>
          </ul>
          <div class="dropdown">
            <button class="dropbtn"><b>Informatie Pagina</b>
              <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
              <a href="<?= $base_url ?>/resources/info-pagina/darth-vader.php">Darth vader</a>
              <a href="<?= $base_url ?>/resources/info-pagina/james-bond.php">James Bond</a>
              <a href="<?= $base_url ?>/resources/info-pagina/luke-skywalker.php">Luke Skywalker</a>
              <a href="<?= $base_url ?>/resources/info-pagina/timoty-dalton.php">Timoty Dalton</a>
            </div>
          </div>
          <div class="dropdown">
            <a href="<?= $base_url ?>/resources/link-pagina.php">
              <button class="button_home" type="button">Home</button>
            </a>
          </div>
        </div>
    </nav>
  </header>