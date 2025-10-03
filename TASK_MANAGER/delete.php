<?php
require 'database/db.php';

if (isset($_GET['id'])) {
    $pdo = db_connect();

    $conditions = [
        'id' => $_GET['id']
    ];

    $query = "DELETE FROM todos WHERE id = ?";
    $statement = $pdo->prepare($query);
    $statement->execute([$conditions['id']]);
}

header("Location: index.php");
exit;
