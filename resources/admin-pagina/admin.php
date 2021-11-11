<?php require_once '../../header.php' ?>
<?php
    require_once '../../backend/conn.php';
    $query = "SELECT * FROM boeken";
    $statement = $conn->prepare($query);
    $statement->execute();
    $boeken = $statement->fetchAll(PDO::FETCH_ASSOC);
?>

<table>
    <tr>
        <th>Titel</th>
        <th>Auteur</th>
        <th>Aanpassen</th>
    </tr>
    <?php foreach($boeken as $boek): ?>
        <tr>
            <td><?php echo $boek['title']; ?></td>
            <td><?php echo $boek['author']; ?></td>
            <td><a href="edit.php<?php echo $boek['id']; ?>">aanpassen</a></td>
        </tr>
    <?php endforeach; ?>
</table>
    <?php require_once "../../footer.php"; ?>