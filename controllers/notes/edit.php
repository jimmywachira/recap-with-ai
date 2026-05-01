<?php

use Core\App;

$db = App::resolve('core/database');

$currentUserId = 1;

$query = 'SELECT * FROM notes WHERE id = :id ';;

$note = $db->query($query, ['id' => $_GET['id']])->findOrFail();

authorize($note['user_id'] === $currentUserId);

views('notes/edit', [
    'heading' => 'Edit Note',
    'errors' => [],
    'note' => $note
]);
