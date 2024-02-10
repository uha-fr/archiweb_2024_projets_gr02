<?php
### IMPORTANT NOTE 
/*
        Don't allow user inputs in any method, it's vulnerable to SQL Injection in $tableName
        thx :) for reading ... Happy Coding !!
*/
Class DBQueryExecutor{
    private $pdo;
    public function __construct(){
        $pdo = Database::getInstance()->getConnection();
    }

    public function selectById($id,$tableName, $fields= "*"){
        $fieldsString = is_array($fields) ? implode(", ", $fields) : $fields;
        $sql = "SELECT {$fieldsString} FROM `{$tableName}` WHERE id = :id";
        $statement = $this->pdo->prepare($sql);
        $statement->execute(['id' => $id]);
        $result = $statement->fetch(PDO::FETCH_ASSOC);
        return $result;

    }

    public function selectAll($tableName, $fields= '*'){
        $fieldsString = is_array($fields) ? implode(", ", $fields) : $fields;
        $sql = "SELECT {$fieldsString} FROM `{$tableName}`";
        $statement = $this->pdo->prepare($sql);
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
}