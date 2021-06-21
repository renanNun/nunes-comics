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

    public function select($table, $id)
    {
        $sql = sprintf(
            'SELECT * FROM %s WHERE %s', 
            $table,
            'id = :id'
        );

        try {
            $statement = $this->pdo->prepare($sql);
    
            $statement->execute(compact('id'));

            return $statement->fetch(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die("An error occurred when trying to select from database: {$e->getMessage()}");
        }
    }

    public function selectAll($table)
    {
        $sql = "SELECT * FROM {$table}";

        $statement = $this->pdo->prepare($sql);
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_CLASS);
    }

    public function insert($table, $parameters)
    {
        $sql = sprintf(
            'INSERT INTO %s (%s) VALUES (%s)', 
            $table,
            implode(', ', array_keys($parameters)),
            ':' . implode(', :', array_keys($parameters))
        );

        try {
            $statement = $this->pdo->prepare($sql);

            $statement->execute($parameters);
        } catch (Exception $e) {
            die("An error occurred when trying to insert into database: {$e->getMessage()}");
        }
    }

    public function edit($table, $parameters, $id)
    {
        $sql = sprintf(
            'UPDATE %s
            SET %s
            WHERE %s;', 
            $table,
            implode(', ', array_map(function ($parameter) {
                return "{$parameter} = :{$parameter}";
            }, array_keys($parameters))),
            'id = :id'
        );

        $parameters['id'] = $id;

        try {
            $statement = $this->pdo->prepare($sql);

            $statement->execute($parameters);
        } catch (Exception $e) {
            die("An error occurred when trying to update database: {$e->getMessage()}");
        }
    }

    public function delete($table, $id)
    {
        $sql = sprintf(
            'DELETE FROM %s WHERE %s;', 
            $table,
            "id = :id"
        );

        try {
            $statement = $this->pdo->prepare($sql);

            $statement->execute(compact('id'));
        } catch (Exception $e) {
            die("An error occurred when trying to delete from database: {$e->getMessage()}");
        }
    }

    public function read()
    {
      
         
    }
}
