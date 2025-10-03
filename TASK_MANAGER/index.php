<?php
require 'database/db.php';
require 'classes/Todo.php';

$pdo = db_connect();

$rows = db_fetch_all($pdo, 'todos');

$todos = [];
foreach ($rows as $row) {
    $todo = new Todo($row['description'], $row['due_date']);
    if ($row['is_completed']) {
        $todo->markAsCompleted();
    }
    $todo->id = $row['id'];
    $todos[] = $todo;
   
}

$today = date('Y-m-d');

$dueToday = array_filter($todos, function($t) use ($today) {
    return $t->dueDate === $today;
});

require 'views/index.html';
