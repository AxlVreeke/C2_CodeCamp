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
          <a href="<?= $base_url ?>/index.php">
          <img src="<?= $base_url ?>/IMG/logo.png" class="logo-codecamp" alt="logo">
          </a>
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
              <a href="<?= $base_url ?>/resources/song-pagina/we-are-the-champions.php">We are the champions (Queen)</a>
              <!-- <a href="<?= $base_url ?>/resources/song-pagina/bohemian-rhapsody.php">Bohemian rhapsody (Queen)</a> DELETED! -->
              <a href="<?= $base_url ?>/resources/song-pagina/killer-queen.php">Killer queen (Queen)</a>
              <a href="<?= $base_url ?>/resources/song-pagina/uprisingMuse.php">Uprising (Muse)</a>
              <a href="<?= $base_url ?>/resources/song-pagina/plug-in-baby.php">Plug in baby (Muse)</a>
              <a href="<?= $base_url ?>/resources/song-pagina/madness.php">Madness (muse)</a>
              <a href="<?= $base_url ?>/resources/song-pagina/uprisingMyBaby.php">Uprising (My Baby)</a>
              <a href="<?= $base_url ?>/resources/song-pagina/transylvania.php">Transylvania (Iron Maiden)</a>
            </div>
          </div>

          <ul class="top-level-menu">
            <li>
              <a class="font-color nav-title"><b class="nav-title-style">Dranken</b></a>
              <ul class="second-level-menu">
                <li>
                  <a href="#" class="font-color">Frisdrank</a>
                  <ul class="third-level-menu">
                    <li><a class="font-color" href="<?= $base_url ?>/resources/dranken-pagina/frisdrank/cola.php ">Cola</a></li>
                    <li><a class="font-color" href="<?= $base_url ?>/resources/dranken-pagina/frisdrank/up.php">Up</a></li>
                    <li><a class="font-color" href="<?= $base_url ?>/resources/dranken-pagina/frisdrank/sinas.php">Sinas</a></li>
                  </ul>
                </li>
                <li>
                  <a class="font-color" href="#">Warme dranken</a>
                  <ul class="third-level-menu">
                    <li><a class="font-color" href="<?= $base_url ?>/resources/dranken-pagina/warme-dranken/koffie.php">Koffie</a></li>
                    <li><a class="font-color" href="<?= $base_url ?>/resources/dranken-pagina/warme-dranken/latte.php">Latte</a></li>
                    <li><a class="font-color" href="<?= $base_url ?>/resources/dranken-pagina/warme-dranken/thee.php">Thee</a></li>
                  </ul>
                </li>
              </ul>
            </li>
          </ul>

          <ul class="top-level-menu">
            <li>
              <a class="font-color nav-title"><b class="nav-title-style">Voorwerpen</b></a>
              <ul class="second-level-menu">
                <li>
                  <a href="#" class="font-color">Zagen</a>
                  <ul class="third-level-menu">
                    <li><a href="<?= $base_url ?>/resources/item-pagina/cirkelzagen.php">Cirkel zagen</a></li>
                    <li><a href="<?= $base_url ?>/resources/item-pagina/handzagen.php">Handzagen</a></li>
                  </ul>
                </li>
                <li>
                  <a href="<?= $base_url ?>/resources/item-pagina/boeken.php">Boeken</a>
                  <a href="<?= $base_url ?>/resources/item-pagina/hamers.php">Hamers</a>
                  <a href="<?= $base_url ?>/resources/item-pagina/schroevendraaiers.php">Schroevendraaiers</a>
                </li>
              </ul>
            </li>
          </ul>
          
          <ul class="top-level-menu">
            <li>
              <a class="font-color nav-title" href="#"><b class="nav-title-style">Personen</b></a>
              <ul class="second-level-menu">
                <li>
                  <a href="#" class="font-color">Acteurs</a>
                  <ul class="third-level-menu">
                    <li><a class="font-color" href="<?= $base_url ?>/resources/info-pagina/acteurs/george-clooney.php">George Clooney</a></li>
                    <li><a class="font-color" href="<?= $base_url ?>/resources/info-pagina/acteurs/rooger-moore.php">Rooger Moore</a></li>
                    <li><a class="font-color" href="<?= $base_url ?>/resources/info-pagina/acteurs/timothy-dalton.php">Timothy Dalton</a></li>
                  </ul>
                </li>
                <li>
                  <a class="font-color" href="#">Karakters</a>
                  <ul class="third-level-menu">
                    <li><a class="font-color" href="<?= $base_url ?>/resources/info-pagina/karakters/darth-vader.php">Darth Vader</a></li>
                    <li><a class="font-color" href="<?= $base_url ?>/resources/info-pagina/karakters/james-bond.php">James Bond</a></li>
                    <li><a class="font-color" href="<?= $base_url ?>/resources/info-pagina/karakters/luke-skywalker.php">Luke Skywalker</a></li>
                  </ul>
                </li>
              </ul>
            </li>
          </ul>
          <div class="dropdown">
            <button class="dropbtn"><b>Overige Links</b>
              <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">

              <a href="https://www.imdb.com/">IMDB</a>
              <a href="https://www.videoland.com/nl/">Videoland</a>
              <a href="https://www.movies.nl/">Movies.nl</a>
            </div>
          </div>
        </div>
      </div>
    </nav>
  </header>
</body id="page-container">
<div id="content-wrap">