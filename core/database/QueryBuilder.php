<?php

namespace App\Core\Database;

use PDO;
use FFI\Exception;

class QueryBuilder
{

    protected $pdo;


    public function __construct(PDO $pdo)
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

    public function selectColumn($table, $column, $value, $start_limit = null, $rows_amount = null)
    {

        $sql = sprintf(
            'SELECT * FROM %s WHERE %s', 
            $table,
            $column
        );

        if($column == 'name') {
            $sql = $sql . "  LIKE '%" . $value . "%'";
        } else {
            // $sql = $sql . " LIKE " . $value;
            $sql = $sql . " LIKE " . ':value';
        }

        if  ($start_limit >= 0 && $rows_amount > 0)
        {
            $sql .= " LIMIT {$start_limit}, {$rows_amount}";
        }

        try {
            $statement = $this->pdo->prepare($sql);
    
            if($column == 'name') {
                $statement->execute();
            } else {
                $statement->execute(['value' => $value]);
            }

            return $statement->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die("An error occurred when trying to select from database: {$e->getMessage()}");
        }
    }

    public function selectAll($table, $start_limit = null, $rows_amount = null)
    {
        try {
            $sql = "SELECT * FROM {$table}";

            if  ($start_limit >= 0 && $rows_amount > 0)
            {
                $sql .= " LIMIT {$start_limit}, {$rows_amount}";
            }

            $statement = $this->pdo->prepare($sql);
    
            $statement->execute();
     
            return $statement->fetchAll(PDO::FETCH_CLASS);
        } catch (Exception $e) {
            die("An error occurred when trying to select from database: {$e->getMessage()}");
        }
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

    public function countAll($table)
    {
        try {
            $statement = $this->pdo->prepare("SELECT COUNT(*) FROM {$table}");
    
            $statement->execute();

            return intval($statement->fetch(PDO::FETCH_NUM)[0]);
        } catch (Exception $e) {
            die("An error occurred when trying to count from database: {$e->getMessage()}");
        }
    }

    public function read($table, $id)
    {
        $sql = "SELECT * FROM {$table} where id = {$id}";
        $statement = $this->pdo->prepare($sql);
        $statement->execute();
        return $statement->fetch(PDO::FETCH_OBJ);
    }
}
