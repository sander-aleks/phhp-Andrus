<?php

$router->get('', 'PagesController@home');
$router->get('about', 'PagesController@about');
$router->get('contact', 'PagesController@contact');

// $router->get('about/culture', 'controllers/about-culture.php');

// $router->post('task', 'controllers/add-task.php');