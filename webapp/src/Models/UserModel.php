<?php 
require MODELSDIR.DS.'Base.php';

class UserModel extends Base
{
    public function calendrier($idUser)
    {
        $query = $this->pdo->prepare("SELECT * FROM recette WHERE ID_Recette = :idRecette");
        $query->execute(['idRecette' => $idUser]);
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getUserByUsernameAndPassword($email , $password)
    {
        $query = $this->pdo->prepare("
            SELECT * FROM utilisateur WHERE email = :email 
        ");
        $query->bindParam(':email', $email);
        $query->execute();
        $user = $query->fetch(PDO::FETCH_ASSOC);

        if ($user) {
            if (password_verify($password, $user['mot_de_passe'])) {
                return $user;
            }
        }
        return false; 
    }

    public function addUser($name, $password, $email,  $country, $gender)
    {
        $query = $this->pdo->prepare("
            INSERT INTO utilisateur (nom, mot_de_passe , email)
            VALUES (:name, :password, :email)
        ");
        $query->bindParam(':name', $name);
        $query->bindParam(':password', $password);
        $query->bindParam(':email', $email);

        return $query->execute();
    }

}
