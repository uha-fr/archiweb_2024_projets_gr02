<?php 

require MODELSDIR.DS.'Database.php';
class Base
{
    protected $pdo;

    public function __construct()
    {
        $this->pdo = Database::connect();
    }
}