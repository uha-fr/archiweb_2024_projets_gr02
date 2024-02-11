<?php

Class Recette{
    private $idRecette;
    private $nom;
    private $description;
    private $tempsPreparation;
    private $tempsCuisson;
    private $caloriesTotales;
    private $creePar; // Utilisateur
    private $visibilite;
    private $typeRepas;
    private $dateCreation;
    private $dateMiseAJour;
    private $ingredients = array();
    private $etapes = array();

    /**
     * Get the value of idRecette
     */ 
    public function getIdRecette()
    {
        return $this->idRecette;
    }

    /**
     * Set the value of idRecette
     *
     * @return  self
     */ 
    public function setIdRecette($idRecette)
    {
        $this->idRecette = $idRecette;

        return $this;
    }

    /**
     * Get the value of nom
     */ 
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */ 
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of description
     */ 
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */ 
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get the value of tempsPreparation
     */ 
    public function getTempsPreparation()
    {
        return $this->tempsPreparation;
    }

    /**
     * Set the value of tempsPreparation
     *
     * @return  self
     */ 
    public function setTempsPreparation($tempsPreparation)
    {
        $this->tempsPreparation = $tempsPreparation;

        return $this;
    }

    /**
     * Get the value of tempsCuisson
     */ 
    public function getTempsCuisson()
    {
        return $this->tempsCuisson;
    }

    /**
     * Set the value of tempsCuisson
     *
     * @return  self
     */ 
    public function setTempsCuisson($tempsCuisson)
    {
        $this->tempsCuisson = $tempsCuisson;

        return $this;
    }

    /**
     * Get the value of caloriesTotales
     */ 
    public function getCaloriesTotales()
    {
        return $this->caloriesTotales;
    }

    /**
     * Set the value of caloriesTotales
     *
     * @return  self
     */ 
    public function setCaloriesTotales($caloriesTotales)
    {
        $this->caloriesTotales = $caloriesTotales;

        return $this;
    }

    /**
     * Get the value of creePar
     */ 
    public function getCreePar()
    {
        return $this->creePar;
    }

    /**
     * Set the value of creePar
     *
     * @return  self
     */ 
    public function setCreePar($creePar)
    {
        $this->creePar = $creePar;

        return $this;
    }

    /**
     * Get the value of visibilite
     */ 
    public function getVisibilite()
    {
        return $this->visibilite;
    }

    /**
     * Set the value of visibilite
     *
     * @return  self
     */ 
    public function setVisibilite($visibilite)
    {
        $this->visibilite = $visibilite;

        return $this;
    }

    /**
     * Get the value of typeRepas
     */ 
    public function getTypeRepas()
    {
        return $this->typeRepas;
    }

    /**
     * Set the value of typeRepas
     *
     * @return  self
     */ 
    public function setTypeRepas($typeRepas)
    {
        $this->typeRepas = $typeRepas;

        return $this;
    }

    /**
     * Get the value of dateCreation
     */ 
    public function getDateCreation()
    {
        return $this->dateCreation;
    }

    /**
     * Set the value of dateCreation
     *
     * @return  self
     */ 
    public function setDateCreation($dateCreation)
    {
        $this->dateCreation = $dateCreation;

        return $this;
    }

    /**
     * Get the value of dateMiseAJour
     */ 
    public function getDateMiseAJour()
    {
        return $this->dateMiseAJour;
    }

    /**
     * Set the value of dateMiseAJour
     *
     * @return  self
     */ 
    public function setDateMiseAJour($dateMiseAJour)
    {
        $this->dateMiseAJour = $dateMiseAJour;

        return $this;
    }

    /**
     * Get the value of ingredients
     */ 
    public function getIngredients()
    {
        return $this->ingredients;
    }

    /**
     * Set the value of ingredients
     *
     * @return  self
     */ 
    public function setIngredients($ingredients)
    {
        $this->ingredients = $ingredients;

        return $this;
    }

    /**
     * Get the value of etapes
     */ 
    public function getEtapes()
    {
        return $this->etapes;
    }

    /**
     * Set the value of etapes
     *
     * @return  self
     */ 
    public function setEtapes($etapes)
    {
        $this->etapes = $etapes;

        return $this;
    }
}