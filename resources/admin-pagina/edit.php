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
    <form action="">
        <label for="fname">Titel:</label>
        <input type="text" name="title" value="<?php echo $boek['title']; ?>">
        <label for="fname">Auteur:</label>
        <input type="text" name="author" value="<?php echo $boek['author']; ?>">
        <label for="fname">Prijs:</label>
        <input type="number" name="price" value="<?php echo $boek['price']; ?>">
        <label for="fname">Pagina's:</label>
        <input type="number" name="pages" value="<?php echo $boek['pages']; ?>">
        <label for="fname">Beschrijving:</label>
        <textarea rows="4" cols="50" name="description" form="usrform"><?php echo $boek['description']; ?></textarea>
    </form>
</div>
<div class="opslaan">
    <button><a href="../../">Opslaan</a></button>
</div>


<?php require_once "../../footer.php"; ?>