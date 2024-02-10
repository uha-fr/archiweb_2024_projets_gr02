<?php
#### Abstraction of ProfilsUtilisateurRepository
interface ProfilsUtilisateurRepositoryInterface{
    public function findById($id);
    public function findAll();
}

####

Class ProfilsUtilisateurRepository implements ProfilsUtilisateurRepositoryInterface{
    private $query;
    private const TABLE = "profilsutilisateurs";
    public function __construct(){
        $this->query = new DBQueryExecutor();
    }

  /**
     * Attempts to find a user profile by ID. 
     * Returns true if the profile is found, or false otherwise.
     * Note: Comments based on insights from GPT-4.
     * @param int $id The ID of the user to find.
     * @return bool True if found, false if not.
     */
    public function findById($id){
        return $this->query->selectById($id, self::TABLE);
    }

    public function findAll(){
      
        return $this->query->selectAll(self::TABLE);
    }
}