<?php

use Alura\Pdo\Domain\Model\Student;

require_once 'vendor/autoload.php';

$path = __DIR__ . '/banco.sqlite';

$pdo = new PDO("sqlite:$path");

$student = new Student(
    null,
    "zé', ''); drop table students; -- lindemberg",
    new \DateTimeImmutable('2001-06-29')
);

$sqlInsert = "insert into students (name, birth_date) values (?,?);";

$statement = $pdo->prepare($sqlInsert);
$statement->bindValue(1, $student->name());
$statement->bindValue(2, $student->birthDate()->format('Y-m-d'));

if ($statement->execute()) {
    echo "Aluno incluído";
} 

//var_dump($pdo->exec($sqlInsert));
