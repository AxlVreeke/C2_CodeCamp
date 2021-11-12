<?php
$action = "update";
if ($action == "update")
{
    $title = $_POST['title'];
    $author = $_POST['author'];
    $price = $_POST['price'];
    $pages = $_POST['pages'];
    $description = $_POST['description'];
    $id = $_POST['id'];

    require_once 'conn.php';
    // $title=mysqli_real_escape_string($conn, $title);
    // $author=mysqli_real_escape_string($conn, $author);
    // $price=mysqli_real_escape_string($conn, $price);
    // $pages=mysqli_real_escape_string($conn, $pages);
    // $description=mysqli_real_escape_string($conn, $description);
    // $id=mysqli_real_escape_string($conn, $id);
    $query = "UPDATE boeken SET title = :title, author = :author, price = :price, pages = :pages, description = :description WHERE id = :id";
    $statement = $conn->prepare($query);
    $statement->execute([
        ":title" => $title,
        ":author" => $author,
        ":price" => $price,
        ":pages" => $pages,
        ":description" => $description,
        ":id" => $id
    ]);

    header("Location: ../resources/admin-pagina/admin.php");
}













?>