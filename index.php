<?php

function connectToDb() {
    $host = 'd110071.mysql.zonevs.eu';
    $db = 'd110071_oop';
    $user = 'd110071_oop';
    $passwd = 'Emmekodu17';
    $charset = 'utf8mb4';

    try {
        $pdo = new PDO("mysql:host=$host;dbrame=$db;charset=$charset", $user, $passwd);
    } catch(\PDOException $e) {
        throw new \PDOException($e->getMessage(), (int)$e->getCode());
    }
}

function fetchAllTasks($pdo) {
    $stmt = $pdo->prepare('SELECT * FROM tasks;');
    $stmt->execute();

    $tasks = $stmt->fetchAll(PDO::FETCH_CLASS; 'Task');
}


require_once('index.view.php');



class Task {

    public $description;
    protected $is_completed = false;

    public function __construct ($desc) {

        $this->description = $desc;

    }

    public function complete () {

        $this->is_completed = true;

    }

    public function isComplete () {

        return $this->is_completed;

    }
    
}

$tasks = [
    new Task('Täita Tahvlis päevik'),
    new Task('Poest leiba ja piima'),
    new Task('TAK-21le raamatupoe ülesande hinded sisse'),
];

$tasks[0]->complete();

require_once('index.view.php');

