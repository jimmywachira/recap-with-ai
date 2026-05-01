<?php

use Core\App;
use Core\Validator;

$db = App::resolve('core/database');

$query = 'SELECT * FROM notes WHERE id = :id ';

$note = $db->query($query, ['id' => $_POST['id']])->findOrFail();

authorize($note['user_id'] === 1);
$errors = [];

if (!Validator::string($_POST['title'], 2, 20)) {
    $errors['title'] = 'Title must be between 2 - 20 characters long.';
}

if (!Validator::string($_POST['body'], 1, 255)) {
    $errors['body'] = 'Body must be between 1 - 255 characters long.';
}

if (empty($errors)) {
    $query = 'UPDATE notes SET title = :title, body = :body WHERE id = :id';
    $params = [
        ':id' => $_POST['id'],
        ':title' => $_POST['title'],
        ':body' => $_POST['body']
    ];

    $db->query($query, $params);
    header('Location: /notes');
    exit();
}
