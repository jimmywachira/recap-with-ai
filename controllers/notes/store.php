<?php

use Core\App;
use Core\Validator;

$errors = [];
$db = App::resolve('core/database');

if (!Validator::string($_POST['title'], 2, 20)) {
    $errors['title'] = 'Title must be between 2 - 20 characters long.';
}

if (!Validator::string($_POST['body'], 1, 255)) {
    $errors['body'] = 'Body must be between 1 - 255 characters long.';
}

if (!empty($errors)) {
    views('notes/create', [
        'heading' => 'Create Note',
        'errors' => $errors
    ]);
}

$query = 'INSERT INTO notes (user_id, title, body) VALUES (:user_id, :title, :body)';
$params = [
    ':user_id' => 1,
    ':title' => $_POST['title'],
    ':body' => $_POST['body']
];

header('Location: /notes');
exit();
