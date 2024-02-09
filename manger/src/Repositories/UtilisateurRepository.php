<?php

class UtilisateurRepository{
    private $pdo;

    public function __construct() {
        $this->pdo = Database::getInstance()->getConnection();
    }

/**
     * Finds a user by ID. Returns user data as an associative array or false if not found.
     * @param int $id The user's ID.
     * @return array|false User data or false if not found.
     */
    public function findById($id) {
        $statement = $this->pdo->prepare("SELECT * FROM `utilisateurs` WHERE ID_Utilisateur = :id");
        $statement->execute(['id' => $id]);
        $row = $statement->fetch(PDO::FETCH_ASSOC);
        return $row;
    }
    
  /**
     * Finds a user's name by ID. Returns the name or false if not found.
     * @param int $id The user's ID.
     * @return string|false User's name or false if not found.
     */
    public function findNameById($id) {
        $statement = $this->pdo->prepare("SELECT Nom_Utilisateur FROM `utilisateurs` WHERE ID_Utilisateur = :id");
        $statement->execute(['id' => $id]);
        $row = $statement->fetch(PDO::FETCH_ASSOC);
        return $row['name'];
    }
}
    # IMPORTANT NOTE 
    /* 
        LATER I WILL SEPRATE THIS TO MY SERVICE FOR HANDELING DIFFERENT SCENARIOS 
        MY REPO WILL HANDLE ONLY THE RETREIVING OF DATA 
        AS FOR MY SERVICE THE CONSTRUCTION OF MY USER MODEL 

        PSS: 
            FETCH WITH PDO::FETCH_ASSOC RETURN FALSE IF NO RECORDS FOUND 
            FETCH ALL RETURN AN EMPTY ARRAY
    */
    # END NOTE. Happy Coding :) 
    /*
    public function findById($id) {
        $statement = $this->pdo->prepare("SELECT Nom_Utilisateur FROM `utilisateurs` WHERE ID_Utilisateur = :id");
        $statement->execute(['id' => $id]);
        $userName = $statement->fetch(PDO::FETCH_ASSOC);

        if (!$userName) {
           
            throw new Exception("User with ID $id not found.");
        }
    
        $statement = $this->pdo->prepare("SELECT * FROM `profilsutilisateurs` WHERE ID_Utilisateur = :id");
        $statement->execute(['id' => $id]);
        $userData = $statement->fetch(PDO::FETCH_ASSOC);
    
        $user = new Utilisateur();
        $user->setNomComplet($userName['Nom_Utilisateur']);
        $user->setIdUtilisateur($id);

        if ($userData) {
            if(!isset($userData['Taille'])) error_log("Warning: Missing Taille for user ID $id");
            if(!isset($userData['Poids'])) error_log("Warning: Missing Poids for user ID $id");
            if(!isset($userData['Age'])) error_log("Warning: Missing Age for user ID $id");
            if(!isset($userData['Genre'])) error_log("Warning: Missing Genre for user ID $id");
            if(!isset($userData['ObjectifCalorique'])) error_log("Warning: Missing ObjectifCalorique for user ID $id");

            $user->setTaille($userData['Taille'] ?? 0);
            $user->setPoids($userData['Poids'] ?? 0);
            $user->setAge($userData['Age'] ?? 0);
            $user->setGenre($userData['Genre'] ?? Genre::UNDEFINED);
            $user->setObjectifCalorique($userData['ObjectifCalorique'] ?? 0);
        }
    
        return $user;
    }
    
*/