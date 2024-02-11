<?php


interface UtilisateurRepositoryInterface{
    public function findById($id);
    public function findNameById($id);
}





class UtilisateurRepository implements UtilisateurRepositoryInterface{
    private $query;
    private const TABLE = "utilisateurs";
    public function __construct() {
        $this->query = new DBQueryExecutor();
    }

/**
     * Finds a user by ID. Returns user data as an associative array or false if not found.
     * @param int $id The user's ID.
     * @return array|false User data or false if not found.
     */
    public function findById($id) {
      
        return $this->query->selectById($id, self::TABLE);

    }
    
  /**
     * Finds a user's name by ID. Returns the name or false if not found.
     * @param int $id The user's ID.
     * @return string|false User's name or false if not found.
     */
    public function findNameById($id) {
        return $this->query->selectById($id, self::TABLE,['Nom_Utilisateur']);
    }

}
    # IMPORTANT NOTE 
    /* 
    
        PSS: 
            FETCH WITH PDO::FETCH_ASSOC RETURN FALSE IF NO RECORDS FOUND 
            FETCH ALL RETURN AN EMPTY ARRAY
    */
    # END NOTE. Happy Coding :) 
   
    