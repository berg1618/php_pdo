<?php

$path = __DIR__ . '/banco.sqlite';

$pdo = new PDO("sqlite:$path");

echo 'connected to database';

$pdo->exec('CREATE TABLE students (id int primary key, name text, birth_date text);');
