<?php
require_once __DIR__ . '/Personne.php';

$john = new Personne('John', 'Doe', 'France', '1989-01-01');
var_dump($john->getAge());