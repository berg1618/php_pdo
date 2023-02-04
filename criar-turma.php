<?php

use Alura\Pdo\Domain\Model\Student;
use Alura\Pdo\Infra\Persistence\ConnectionCreator;
use Alura\Pdo\Infra\Repository\PdoStudentRepository;

require_once 'vendor/autoload.php';

$connection = ConnectionCreator::createConnection();
$studentRepository = new PdoStudentRepository($connection);

$connection->beginTransaction();
$aStudent = new Student(
    null,
    'marquin',
    new DateTimeImmutable('1985-01-01')
);

$studentRepository->save($aStudent);

$anotherStudent = new Student(
    null,
    'arthur avlista',
    new DateTimeImmutable('1995-01-01')
);

$studentRepository->save($anotherStudent);

$connection->commit();
