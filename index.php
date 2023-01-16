<?php

$db = require_once('bootstrap.php');

$tasks = $db->selectAll('tasks');

require_once('index.view.php');
