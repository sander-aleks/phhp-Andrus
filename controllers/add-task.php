<?php

App::get('database')->insert('tasks', [
    'description' => $_POST['description'],
]);

header('Location: /');