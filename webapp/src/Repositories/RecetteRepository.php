<?php


class RecetteRepository {
    private $query;
    private const TABLE = "recettes";

    public function __construct(){
        $this->query = new DBQueryExecutor();
    }

    public function findAll(){
        return $this->query->selectAll(self::TABLE);
    }

}