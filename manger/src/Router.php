<?php
#-------------------------------------------------------------------
# TO SIMPLIFY THE ROUTING PROCESS WE WILL GIVE UP THE USE OF ROUTER.
# THE index.php IS THE MAIN ROUTER FOR OUR APP AT LEAST FOR NOW 
# :) :o :c :3 
#---------------------------------------------------------------------
class Router
{
    function manageRequest($request,$queryParams)// TRES IMPORTANT: La méthode prend en paramètre la route ET un tableau avec tous les paramètre GET
    {
       
        if($request == '/archiweb_2024_projets_gr02/manger/')
        {
            require CONTROLLERSDIR. DS.'HomeController.php';
            $c = new HomeController();
            $c->viewStart();
        }
        else  if($request == '/manger/login')
        {
            require CONTROLLERSDIR.DS.'HomeController.php';
            $c = new HomeController();
            $c->viewLogin();
        }
        else  if($request == '/manger/register')
        {
            require CONTROLLERSDIR.DS.'HomeController.php';
            $c = new HomeController();
            $c->viewRegister();
        }
        else  if($request == '/manger/contact')
        {
            require CONTROLLERSDIR.DS.'NutritionnisteController.php';
            $c = new NutritionnisteController();
            $c->view();
        }
        else  if($request == '/manger/calendrier')
        {
            require CONTROLLERSDIR.DS.'UserController.php';
            $c = new UserController();
            $c->calendrier();
        }
        else  if($request == '/manger/consommations')
        {
            require CONTROLLERSDIR.DS.'UserController.php';
            $c = new UserController();
            $c->consommations();
        }
        else  if($request == '/manger/ajouterRecette')
        {
            require CONTROLLERSDIR.DS.'RecetteController.php';
            $c = new RecetteController();
            $c->ajouterRecetteForm();
        }
        else  if($request == '/manger/listeRecette')
        {
            require CONTROLLERSDIR.DS.'RecetteController.php';
            $c = new RecetteController();
            $c->listeRecette();
        }
        else if($request == '/manger/element')
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
