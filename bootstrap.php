<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$config = require_once('config.php');

require_once('database/Connection.php');
require_once('database/QueryBuilder.php');

return new QueryBuilder(
    Connection::make($config['database'])
);