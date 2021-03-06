<?php require_once '../../header.php' ?>

<?php
    require_once '../../backend/conn.php';
    $id = $_GET['id'];
    $query = "SELECT * FROM boeken WHERE id = :id";
    $statement = $conn->prepare($query);
    $statement->execute([":id" => $id]);
    $boek = $statement->fetch(PDO::FETCH_ASSOC);
?>
<div class="edit-form">
    <form action="http://localhost/C2_CodeCamp/backend/boekenController.php" method="POST">
        <div class="item-edit">
            <label for="fname">Titel:</label>
            <input type="text" name="title" value="<?php echo $boek['title']; ?>">
        </div>
        <div class="item-edit">
            <label for="fname">Auteur:</label>
            <input type="text" name="author" value="<?php echo $boek['author']; ?>">
        </div>
        <div class="item-edit">
            <label for="fname">Prijs:</label>
            <input type="number" name="price" value="<?php echo $boek['price']; ?>">
        </div>
        <div class="item-edit">
            <label for="fname">Pagina's:</label>
            <input type="number" name="pages" value="<?php echo $boek['pages']; ?>">
        </div>
        <div class="item-edit">
            <label for="fname">Beschrijving:</label>
            <textarea rows="4" cols="50" name="description" value="<?php echo $boek['description']; ?>"></textarea>
        </div>
        <input type="hidden" name="id" value="<?php echo $boek['id']; ?>">
        <div class="opslaan-button">
            <button type="submit" value="Submit">Opslaan</button>
        </div>
    </form>
</div>
<!-- <div class="opslaan-button">
    <button><a href="../../">Opslaan</a></button>
</div> -->


<?php require_once "../../footer.php"; ?>