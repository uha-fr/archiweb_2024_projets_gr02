<?php 

Class Ingredient{
    private $idIngredient;
    private $nom;
    private $caloriesParUnite;
    private $unite;
    private $lipide;
    private $proteines;
    private $glucides;
    private $quantite; // The Quantity is located in recettesingredients table we fetch it when trying to retreive recette


    /**
     * Get the value of proteines
     */ 
    public function getProteines()
    {
        return $this->proteines;
    }

    /**
     * Set the value of proteines
     *
     * @return  self
     */ 
    public function setProteines($proteines)
    {
        $this->proteines = $proteines;

        return $this;
    }

    /**
     * Get the value of glucides
     */ 
    public function getGlucides()
    {
        return $this->glucides;
    }

    /**
     * Set the value of glucides
     *
     * @return  self
     */ 
    public function setGlucides($glucides)
    {
        $this->glucides = $glucides;

        return $this;
    }

    /**
     * Get the value of quantite
     */ 
    public function getQuantite()
    {
        return $this->quantite;
    }

    /**
     * Set the value of quantite
     *
     * @return  self
     */ 
    public function setQuantite($quantite)
    {
        $this->quantite = $quantite;

        return $this;
    }

    /**
     * Get the value of lipide
     */ 
    public function getLipide()
    {
        return $this->lipide;
    }

    /**
     * Set the value of lipide
     *
     * @return  self
     */ 
    public function setLipide($lipide)
    {
        $this->lipide = $lipide;

        return $this;
    }

    /**
     * Get the value of unite
     */ 
    public function getUnite()
    {
        return $this->unite;
    }

    /**
     * Set the value of unite
     *
     * @return  self
     */ 
    public function setUnite($unite)
    {
        $this->unite = $unite;

        return $this;
    }

    /**
     * Get the value of caloriesParUnite
     */ 
    public function getCaloriesParUnite()
    {
        return $this->caloriesParUnite;
    }

    /**
     * Set the value of caloriesParUnite
     *
     * @return  self
     */ 
    public function setCaloriesParUnite($caloriesParUnite)
    {
        $this->caloriesParUnite = $caloriesParUnite;

        return $this;
    }

    /**
     * Get the value of idIngredient
     */ 
    public function getIdIngredient()
    {
        return $this->idIngredient;
    }

    /**
     * Set the value of idIngredient
     *
     * @return  self
     */ 
    public function setIdIngredient($idIngredient)
    {
        $this->idIngredient = $idIngredient;

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
}