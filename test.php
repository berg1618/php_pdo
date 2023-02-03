<?php

use Alura\Pdo\Infra\Repository\PdoStudentRepository;

$pdo = new PDO('sqlite::memory');
$repository = new PdoStudentRepository($pdo);

empty($repository->allStudents());