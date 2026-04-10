<?php

$config = require base_path('config.php');
$db = new database($config['database']);

$currentUserId = 1;
$query = 'SELECT * FROM notes WHERE user_id = :id';
$params = [':id' => $currentUserId];

$notes = $db->query($query, $params)->fetchAll();

views('notes/index', [
    'heading' => 'Notes',
    'notes' => $notes
]);
