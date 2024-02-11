<?php

Class RecetteService{
    private $recetteRepo;

    public function __construct(){
        $this->recetteRepo = new RecetteRepository();
    }

    public function getAll(){
        $recette = $this->recetteRepo->findAll();
        $recette = new Recette();
        
    }
}