<?php

class Router
{
    function ManageRequest($request,$queryParams)// TRES IMPORTANT: La méthode prend en paramètre la route ET un tableau avec tous les paramètre GET
    {
       
        if($request == '/webapp/')
        {
            require CONTROLLERSDIR.DS.'HomeController.php';
            $c = new HomeController();
            $c->viewStart();
        }
        else  if($request == '/webapp/login')
        {
            require CONTROLLERSDIR.DS.'HomeController.php';
            $c = new HomeController();
            $c->viewLogin();
        }
        else  if($request == '/webapp/register')
        {
            require CONTROLLERSDIR.DS.'HomeController.php';
            $c = new HomeController();
            $c->viewRegister();
        }
        else  if($request == '/webapp/contact')
        {
            require CONTROLLERSDIR.DS.'NutritionnisteController.php';
            $c = new NutritionnisteController();
            $c->view();
        }
        else  if($request == '/webapp/calendrier')
        {
            require CONTROLLERSDIR.DS.'UserController.php';
            $c = new UserController();
            $c->calendrier(1);
        }
        else  if($request == '/webapp/consommations')
        {
            require CONTROLLERSDIR.DS.'UserController.php';
            $c = new UserController();
            $c->consommations();
        }
        else  if($request == '/webapp/ajouterRecette')
        {
            require CONTROLLERSDIR.DS.'RecetteController.php';
            $c = new RecetteController();
            $c->ajouterRecetteForm();
        }
        else  if($request == '/webapp/tendance')
        {
            require CONTROLLERSDIR.DS.'RecetteController.php';
            $c = new RecetteController();
            $c->listeRecette();
        }
        else  if($request == '/webapp/search')
        {
            require CONTROLLERSDIR.DS.'RecetteController.php';
            $c = new RecetteController();
            $c->rechercherRecettes();
        }
        else  if($request == '/webapp/searchFrigo')
        {
            require CONTROLLERSDIR.DS.'RecetteController.php';
            $c = new RecetteController();
            $c->searchFrigo();
        }
        else  if($request == '/webapp/liste')
        {
            require CONTROLLERSDIR.DS.'RecetteController.php';
            $c = new RecetteController();
            $c->listeRecetteAvance($queryParams);
        }
        else if($request == '/webapp/element')
        {
            /*require CONTROLLERSDIR.DS.'ProductController.php';
            $c = new ProductController();

            if(isset($queryParams['id']))
            {
                $id= $queryParams['id'];
                $c->view($id);
            }    */  
        }
        else 
        {
            echo "Route non reconnue.";
        }

    }
}