<?php

$router->get('','controllers/index.php');
$router->get('about','controllers/about.php');
$router->get('about/culture','controllers/about.culture.php');
$router->get('contacts','controllers/contacts.php');

$router->post('task','controllers/add-task.php');