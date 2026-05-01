<?php

use Core\App;

$db = App::resolve('core/database');

$currentUserId = 1;

// $noteId = $_POST['id'];

// if (!$noteId) {
//     abort(404);
// }

$query = 'SELECT * FROM notes WHERE id = :id ';
$params = ['id' => $_POST['id']];

$note = $db->query($query, $params)->findOrFail();

authorize($note['user_id'] === $currentUserId);

$query = 'DELETE FROM notes WHERE id = :id';
$params = ['id' => $_POST['id']];

$db->query($query, $params);
header('Location: /notes');
exit();
