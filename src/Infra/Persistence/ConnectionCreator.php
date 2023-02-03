<?php

namespace Alura\Pdo\Domain\Infra\Persistence;

use PDO;
class ConnectionCreator
{
    public static function createConnection(): PDO
    {
        $databasePath = __DIR__ . '../../../banco.sqlite';
        return new PDO('sqlite:' . $databasePath);
    }
}
