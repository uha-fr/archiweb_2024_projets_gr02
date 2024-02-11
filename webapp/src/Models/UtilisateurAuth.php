<?php 

Class UtilisateurAuth{
    private $email;
    private $hashedMotDePasse;
    private $role;

    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
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
     * Get the value of hashedMotDePasse
     */ 
    public function getHashedMotDePasse()
    {
        return $this->hashedMotDePasse;
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
     * Get the value of role
     */ 
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Set the value of role
     *
     * @return  self
     */ 
    public function setRole($role)
    {
        $this->role = $role;

        return $this;
    }
}