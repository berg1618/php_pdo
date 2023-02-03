<?php

use Alura\Pdo\Domain\Infra\Persistence\ConnectionCreator;
use Alura\Pdo\Domain\Model\Student;

require_once 'vendor/autoload.php';

$pdo = ConnectionCreator::createConnection();

$preparedStatement = $pdo->prepare('delete from students where id = ?;');
$preparedStatement->bindValue(1, 4, PDO::PARAM_INT);
var_dump($preparedStatement->execute());

$preparedStatement->bindValue(1, 5, PDO::PARAM_INT);
$preparedStatement->execute();
