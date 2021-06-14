<?php

namespace App\Core\Database;

use PDO;

class QueryBuilder
{

    protected $pdo;


    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }


    public function selectAll($table)
    {
        $sql = "SELECT * FROM {$table}";

        $statement = $this->pdo->prepare($sql);

        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS);
    }

    public function insert($table, $params)
    {
        $sql = sprintf(
            'insert into %s (%s) values (%s)',
            $table,
            implode(', ', array_keys($params)),
            ':' . implode(', :', array_keys($params))
        );

        $statement = $this->pdo->prepare($sql);
        $statement->execute($params);
    }


    public function edit()
    {
    }


    public function delete($table, $id)
    {
        $sql = "DELETE FROM {$table} where id = {$id}";

        $query = $this->pdo->prepare($sql);
        $query->execute();
    }


    public function read($table, $id)
    {
        $sql = "SELECT * FROM {$table} where id = {$id}";
        $query = $this->pdo->prepare($sql);
        $query->execute();
        return $query->fetch(PDO::FETCH_OBJ);
    }
}
