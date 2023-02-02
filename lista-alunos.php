<?php

use Alura\Pdo\Domain\Model\Student;

require_once 'vendor/autoload.php';

$path = __DIR__ . '/banco.sqlite';

$pdo = new PDO("sqlite:$path");

$statement = $pdo->query('select * from students;');

$studentDataList = $statement->fetchAll(PDO::FETCH_ASSOC);
$studentList = [];

var_dump($studentDataList);
exit();

foreach ($studentDataList as $studentData) {
    $studentList[] = new Student(
        $studentData['id'],
        $studentData['name'],
        new \DateTimeImmutable($studentData['birth_date'])
    );
}

var_dump($studentDataList);

//echo $studentList[0]['id'];
