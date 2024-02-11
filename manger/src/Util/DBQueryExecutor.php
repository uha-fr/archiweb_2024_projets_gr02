<?php
### IMPORTANT NOTE 
/*
        Don't allow user inputs in any method, it's vulnerable to SQL Injection in $tableName
        thx :) for reading ... Happy Coding !!
*/
Class DBQueryExecutor{
    private $pdo;
    public function __construct(){
        $this->pdo = Database::getInstance()->getConnection();
    }

    public function selectById($id, $tableName, $fields = "*") {
        try {
            $fieldsString = is_array($fields) ? implode(", ", $fields) : $fields;
            $sql = "SELECT {$fieldsString} FROM `{$tableName}` WHERE id = :id";
            $statement = $this->pdo->prepare($sql);
            $statement->execute(['id' => $id]);
            return $statement->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            error_log("SelectByID error: " . $e->getMessage());
            return false;
        }
    }

    public function selectAll($tableName, $fields = '*') {
        try {
            $fieldsString = is_array($fields) ? implode(", ", $fields) : $fields;
            $sql = "SELECT {$fieldsString} FROM `{$tableName}`";
            $statement = $this->pdo->prepare($sql);
            $statement->execute();
            return $statement->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            error_log("SelectAll error: " . $e->getMessage());
            return false;
        }
    }

    public function insert($tableName, $fields, $values) {
        try {
            if (is_array($fields) && is_array($values) && count($fields) === count($values)) {
                $fieldNames = implode(", ", $fields);
                $placeholders = implode(", ", array_fill(0, count($values), '?'));
                $sql = "INSERT INTO `{$tableName}` ({$fieldNames}) VALUES ({$placeholders})";
                $statement = $this->pdo->prepare($sql);
                $success = $statement->execute($values);
                return $success ? $this->pdo->lastInsertId() : false;
            } else {
                return false;
            }
        } catch (PDOException $e) {
            error_log("Insert error: " . $e->getMessage());
            return false;
        }
    }

    public function deleteById($tableName, $id) {
        try {
            $sql = "DELETE FROM `{$tableName}` WHERE id = :id";
            $statement = $this->pdo->prepare($sql);
            $success = $statement->execute(['id' => $id]);
            return $success;
        } catch (PDOException $e) {
            error_log("DeleteById error: " . $e->getMessage());
            return false;
        }
    }
    
}