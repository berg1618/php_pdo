<?php

use Alura\Pdo\Domain\Model\Student;

require_once 'vendor/autoload.php';

$path = __DIR__ . '/banco.sqlite';

$pdo = new PDO("sqlite:$path");

$student = new Student(null, 'zé lindemberg', new \DateTimeImmutable('2001-06-29'));

$sqlInsert = "insert into students (name, birth_date) values ('{$student->name()}','{$student->birthDate()->format('Y-m-d')}');";

$pdo->exec($sqlInsert);

echo $sqlInsert;
