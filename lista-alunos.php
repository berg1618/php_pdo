<?php

use Alura\Pdo\Domain\Model\Student;
use Alura\Pdo\Infra\Persistence\ConnectionCreator;

require_once 'vendor/autoload.php';

$pdo = ConnectionCreator::createConnection();

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
