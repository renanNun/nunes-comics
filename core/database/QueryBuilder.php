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

        try {

            $statement = $this->pdo->prepare($sql);
            $statement->execute($params);
        } catch (\Exception $e) {
            echo "não foi possivel alterar informações" . $e->getMessage();
        }
    }


    public function edit($table, $id, $params)
    {
        $counter = 1;
        $sql = "update " . $table . " set ";
        foreach ($params as $key => $value) {
            if ($counter == count($params)) {
                $sql .= $key . " = '" . $value . "'";
            } else {
                $sql .= $key . " = '" . $value . "' ,";
            }
            $counter += 1;
        }
        $sql .= " where id = {$id}";

        try {
            $statement = $this->pdo->prepare($sql);
            $statement->execute($params);
        } catch (\Exception $e) {
            echo "não foi possivel alterar informações" . $e->getMessage();
        }
    }


    public function delete($table, $id)
    {
        $sql = "DELETE FROM {$table} where id = {$id}";

        $statement = $this->pdo->prepare($sql);
        $statement->execute();
    }


    public function read($table, $id)
    {
        $sql = "SELECT * FROM {$table} where id = {$id}";
        $statement = $this->pdo->prepare($sql);
        $statement->execute();
        return $statement->fetch(PDO::FETCH_OBJ);
    }
}
