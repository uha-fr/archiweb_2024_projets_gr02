<?php 
require MODELSDIR.DS.'Base.php';

class RecettesModel extends Base
{
    public function getAllIngredients() {
        $query = $this->pdo->prepare("SELECT identifiant , nom FROM INGREDIENT");
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    
    public function getAllRecette()
    {
        $query = $this->pdo->prepare("SELECT * FROM recette");
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    function ajouterRecette($name,$prepa,$cuisson,$type,$ingredients,$quantities,$measures,$step)
    {
       // Insertion de la recette dans la table RECETTE
       $stmt = $this->pdo->prepare("INSERT INTO recette (nom, temps_preparation,temps_cuisson,publie_par,type_repas) VALUES (?,?,?,?,?)");
       $stmt->execute([$name, $prepa,$cuisson,$_SESSION['id'],$type]);
       // Récupération de l'ID de la recette insérée
       $recette_id = $this->pdo->lastInsertId();

       // Insertion des étapes dans la table ETAPES
       foreach ($steps as $step) {
           $stmt = $this->pdo->prepare("INSERT INTO etape (identifiant_recette, description) VALUES (?, ?)");
           $stmt->execute([$recette_id, $step]);
       }

       // Insertion des ingrédients dans la table INGREDIENT_RECETTE avec les quantités associées
       foreach ($ingredients as $key => $ingredient_id) {
           $quantity = $quantities[$key];

           $stmt = $this->pdo->prepare("INSERT INTO recette_ingredient (identifiant_recette, indentifiant_ingredient, quantite) VALUES (?, ?, ?)");
           $stmt->execute([$recette_id, $ingredient_id, $quantity]);
       }

       // Répondre avec un message de succès ou d'échec (à adapter selon vos besoins)
       if ($stmt) {
           echo "La recette a été ajoutée avec succès!";
       } else {
           echo "Erreur lors de l'ajout de la recette.";
       }

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