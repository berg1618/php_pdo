<?php

use Alura\Pdo\Domain\Model\Student;

require_once 'vendor/autoload.php';

$path = __DIR__ . '/banco.sqlite';

$pdo = new PDO("sqlite:$path");

$student = new Student(
    null,
    "o fecha gol",
    new \DateTimeImmutable('2003-03-19')
);

$sqlInsert = "insert into students (name, birth_date) values (:name,:birth_date);";

$statement = $pdo->prepare($sqlInsert);
$statement->bindValue(':name', $student->name());
$statement->bindValue(':birth_date', $student->birthDate()->format('Y-m-d'));

if ($statement->execute()) {
    echo "Aluno incluído";
} 

//var_dump($pdo->exec($sqlInsert));
