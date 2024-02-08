<?php 

Class Utilisateur{
    private $idUtilisateur;
    private $nomComplet;
   
    private $taille;
    private $poids;
    private $age;
    private $genre;
    private $ObjectifCalorique;
    

    


    /**
     * Get the value of idUtilisateur
     */ 
    public function getIdUtilisateur()
    {
        return $this->idUtilisateur;
    }

    /**
     * Set the value of idUtilisateur
     *
     * @return  self
     */ 
    public function setIdUtilisateur($idUtilisateur)
    {
        $this->idUtilisateur = $idUtilisateur;

        return $this;
    }

   
    /**
     * Set the value of hashedMotDePasse
     *
     * @return  self
     */ 
    public function setHashedMotDePasse($hashedMotDePasse)
    {
        $this->hashedMotDePasse = $hashedMotDePasse;

        return $this;
    }

  
    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of taille
     */ 
    public function getTaille()
    {
        return $this->taille;
    }

    /**
     * Set the value of taille
     *
     * @return  self
     */ 
    public function setTaille($taille)
    {
        $this->taille = $taille;

        return $this;
    }

    /**
     * Get the value of nomComplet
     */ 
    public function getNomComplet()
    {
        return $this->nomComplet;
    }

    /**
     * Set the value of nomComplet
     *
     * @return  self
     */ 
    public function setNomComplet($nomComplet)
    {
        $this->nomComplet = $nomComplet;

        return $this;
    }

    /**
     * Get the value of poids
     */ 
    public function getPoids()
    {
        return $this->poids;
    }

    /**
     * Set the value of poids
     *
     * @return  self
     */ 
    public function setPoids($poids)
    {
        $this->poids = $poids;

        return $this;
    }

    /**
     * Get the value of age
     */ 
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set the value of age
     *
     * @return  self
     */ 
    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }

    /**
     * Get the value of genre
     */ 
    public function getGenre()
    {
        return $this->genre;
    }

    /**
     * Set the value of genre
     *
     * @return  self
     */ 
    public function setGenre($genre)
    {
        $allowedGenders = [
            Genre::MASCULIN,
            Genre::FEMININ,
            Genre::AUTRE,
        ];
        if(!in_array($genre, $allowedGenders)) throw new InvalidArgumentException("Invalid Genre Value");

        $this->genre = $genre;

        return $this;
    }

    /**
     * Get the value of ObjectifCalorique
     */ 
    public function getObjectifCalorique()
    {
        return $this->ObjectifCalorique;
    }

    /**
     * Set the value of ObjectifCalorique
     *
     * @return  self
     */ 
    public function setObjectifCalorique($ObjectifCalorique)
    {
        $this->ObjectifCalorique = $ObjectifCalorique;

        return $this;
    }


    /**
     * Set the value of role
     *
     * @return  self
     */ 
    public function setRole($role)
    {
        $allowedRoles = [
            Role::USER,
            Role::ADMIN,
            Role::NUTRITIONNISTE,
            
        ];
        if(!in_array($role, $allowedRoles)) throw new InvalidArgumentException("Invalid Role Value");
        
        $this->role = $role;

        return $this;
    }
}