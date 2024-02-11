<?php   

Class UtilisateurService{
    private $utilisateurRepo;
    private $profilsUtilisateurRepo;
    public function __construct() {
        $this->utilisateurRepo = new UtilisateurRepository();
        $this->profilsUtilisateurRepo = new ProfilsUtilisateurRepository();
    }

    public function getUtilisateurById($id) {
        $userName = $this->utilisateurRepo->findNameById($id); 
        
        if(!$userName){
            throw new Exception("User with ID $id not found.");
        }

        $user = new Utilisateur();
        $user->setNomComplet($userName['Nom_Utilisateur']);
        $user->setIdUtilisateur($id);

        $userProfilData = $this->profilsUtilisateurRepo->findById($id);
        if(!$userProfilData){
            if(!isset($userData['Taille'])) error_log("Warning: Missing Taille for user ID $id");
            if(!isset($userData['Poids'])) error_log("Warning: Missing Poids for user ID $id");
            if(!isset($userData['Age'])) error_log("Warning: Missing Age for user ID $id");
            if(!isset($userData['Genre'])) error_log("Warning: Missing Genre for user ID $id");
            if(!isset($userData['ObjectifCalorique'])) error_log("Warning: Missing ObjectifCalorique for user ID $id");

            $user->setTaille($userProfilData['Taille'] ?? 0);
            $user->setPoids($userProfilData['Poids'] ?? 0);
            $user->setAge($userProfilData['Age'] ?? 0);
            $user->setGenre($userProfilData['Genre'] ?? Genre::UNDEFINED);
            $user->setObjectifCalorique($userProfilData['ObjectifCalorique'] ?? 0);
        }

        return $user;
    }
}