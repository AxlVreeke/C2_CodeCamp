<?php require_once '../../header.php' ?>
<?php
    require_once '../../backend/conn.php';
    $query = "SELECT * FROM boeken";
    $statement = $conn->prepare($query);
    $statement->execute();
    $boeken = $statement->fetchAll(PDO::FETCH_ASSOC);
?>
<div class="container">
    <table>
        <tr>
            <th>Titel</th>
            <th>Auteur</th>
            <th>Prijs</th>
            <th>Pagina's</th>
            <th>Beschrijving</th>
            <th>Aanpassen</th>
        </tr>
        <?php foreach($boeken as $boek): ?>
            <tr>
                <td><?php echo $boek['title']; ?></td>
                <td><?php echo $boek['author']; ?></td>
                <td>€<?php echo $boek['price']; ?></td>
                <td><?php echo $boek['pages']; ?></td>
                <td><?php echo $boek['description']; ?></td>
                <td><a href="edit.php?id=<?php echo $boek['id']; ?>">aanpassen</a></td>
            </tr>
        <?php endforeach; ?>
    </table>
</table>

<?php require_once "../../footer.php"; ?>