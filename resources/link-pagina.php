<?php require_once '../header.php' ?>
<body>
 <ul class="breadcrumb">
    <li class="breadcrumb-item"> <a href="#">Home</a></li>
    <li class="breadcrumb-item"> <a href="#">Link pagina</a></li>
 </ul>
</body>
<div class="container">
    <div class="links">
        <ul class="link-items">
            <li class="bullet-remove" ><a class="font-decor" href="https://www.imdb.com">IMDB</a></li>
            <li class="bullet-remove" ><a class="font-decor" href="https://www.videoland.nl">videoland</a></li>
            <li class="bullet-remove" ><a class="font-decor" href="https://www.movies.nl">Movies</a></li>
        </ul>
    </div>
</div>
<form>
 <input type="button" value="Go back!" onclick="history.back()">
</form>
<?php require_once '../footer.php' ?>