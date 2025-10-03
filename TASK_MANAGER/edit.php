<?php
require 'database/db.php';
require 'classes/Todo.php';

$pdo = db_connect();
$errorMessage = null;
$todo = null;

if (isset($_GET['id'])) {
    $query = "SELECT * FROM todos WHERE id = ?";
    $statement = $pdo->prepare($query);
    $statement->execute([$_GET['id']]);
    $row = $statement->fetch(PDO::FETCH_ASSOC);

    if (!$row) {
        die("Todo not found!");
    }

    $todo = new Todo($row['description'], $row['due_date']);
    $todo->id = $row['id'];
    $todo->isCompleted = (bool)$row['is_completed'];
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (empty($_POST['description']) || empty($_POST['due_date'])) {
        $errorMessage = "All fields are required!";
    } else {
        $fields = [
            'description' => $_POST['description'],
            'due_date' => $_POST['due_date']
        ];
        $conditions = [
            'id' => $_POST['id']
        ];

        db_update($pdo, 'todos', $fields, $conditions);

        header("Location: index.php");
        exit;
    }
}

require 'views/edit.view.php';
?>
