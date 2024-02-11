<?php 
require MODELSDIR.DS.'Base.php';

class RecettesModel extends Base
{
    public function getAllRecette()
    {
        $query = $this->pdo->prepare("SELECT * FROM recette");
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getRecetteAvance($queryParams)
    {
        // Utilisez % autour du terme de recherche pour correspondre à n'importe quel texte avant et après
        $searchTerm = '%' . $queryParams["search"] . '%';

        // Préparez la requête SQL avec la clause WHERE pour filtrer les résultats
        $query = $this->pdo->prepare("SELECT * FROM recette WHERE Nom LIKE :searchTerm");
        
        // Liez la valeur de recherche à la requête préparée
        $query->bindParam(':searchTerm', $searchTerm, PDO::PARAM_STR);
        
        // Exécutez la requête
        $query->execute();
        
        // Récupérez tous les résultats correspondants
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    
    public function getRecette($idRecette)
    {
        $query = $this->pdo->prepare("SELECT * FROM recette WHERE ID_Recette = :idRecette");
        $query->execute(['idRecette' => $idRecette]);
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getCommentairesByIdRecette($idRecette)
    {
        $query = $this->pdo->prepare("SELECT * FROM EvaluationRecette WHERE ID_Recette = :idRecette");
        $query->execute(['idRecette' => $idRecette]);
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getUtilisateurByIdRecette($idRecette)
    {
        $query = $this->pdo->prepare("SELECT U.* FROM Utilisateur U JOIN Recette R ON U.ID_Utilisateur = R.PubliePar WHERE R.ID_Recette = :idRecette");
        $query->execute(['idRecette' => $idRecette]);
        return $query->fetch(PDO::FETCH_ASSOC);
    }

    public function getEtapesByIdRecette($idRecette)
    {
        $query = $this->pdo->prepare("SELECT * FROM EtapeRecette WHERE ID_Recette = :idRecette ORDER BY OrdreEtape");
        $query->execute(['idRecette' => $idRecette]);
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    // Fonction pour récupérer les ingrédients d'une recette
    public function getIngredientsByIdRecette($idRecette)
    {
        $query = $this->pdo->prepare("SELECT I.*, RI.Quantite FROM Ingredient I JOIN RecetteIngredients RI ON I.ID_Ingredient = RI.ID_Ingredient WHERE RI.ID_Recette = :idRecette");
        $query->execute(['idRecette' => $idRecette]);
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    // - Fonction pour récupérer les recettes favorites d'un utilisateur
    // - Fonction pour récupérer les recettes les plus récentes
    // - Fonction pour ajouter une nouvelle recette, etc.
}