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

}
