<?php

namespace App\Models;

use PDO;
use PDOStatement;
use PDOException;

//Die Klasse stellt die Verbindung zur Datenbank her. Im Array werden die LogIn Daten festgehalten.
class Database {
    private string $host = 'localhost';
    private string $databaseName = 'forum';
    private string $charset = 'utf8mb4';
    private string $username = 'root';
    private string $password = 'root';

    private PDO $pdo;
    private PDOStatement $statement;

    //Instanziiert die Vebindung und übergibt username und password.
    public function __construct()
    {
        try {
            $this->pdo = new PDO(
                "mysql:host={$this->host};dbname={$this->databaseName};charset={$this->charset}",
                $this->username,
                $this->password,
                [ PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION ]
            );
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function query(string $sql, array $values = []): self
    {
        $this->statement = $this->pdo->prepare($sql);
        $this->statement->execute($values);

        return $this;
    }

    public function results(): array
    {
        return $this->statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public function first(): array
    {
        return $this->results()[0];
    }

    public function count(): int
    {
        return $this->statement->rowCount();
    }
}
