<?php

$config = require base_path('config.php');
$db = new database($config['database']);

$query = 'SELECT * FROM notes WHERE id = :id ';
$params = [':id' => $_GET['id']];

$note = $db->query($query, $params)->findOrFail();

if (!$note) {
    abort();
}

if ($note['user_id'] !== 1) {
    abort(Response::HTTP_FORBIDDEN);
}

views('notes/show', [
    'heading' => $note['title'],
    'note' => $note
]);
