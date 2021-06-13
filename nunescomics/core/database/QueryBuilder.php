<?php

namespace App\Core\Database;

use PDO;

class QueryBuilder {

    protected $pdo;


    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }


    public function selectAll()
    {
       
    }

    public function insert($table, $params){
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


    public function delete() {
      
    }

    
    public function read()
    {
       
    }
}
