<?php


Class ProfilsUtilisateurRepository{
    private $pdo;
    public function __construct(){
        $this->pdo = Database::getInstance()->getConnection();
    }

  /**
     * Attempts to find a user profile by ID. 
     * Returns true if the profile is found, or false otherwise.
     * Note: Comments based on insights from GPT-4.
     * @param int $id The ID of the user to find.
     * @return bool True if found, false if not.
     */
    public function findById($id){
        $statement = $this->pdo->prepare("SELECT * FROM `profilsutilisateurs` WHERE ID_Utilisateur = :id");
        $statement->execute(['id' => $id]);
        $userData = $statement->fetch(PDO::FETCH_ASSOC);
        return $userData;
    }
}