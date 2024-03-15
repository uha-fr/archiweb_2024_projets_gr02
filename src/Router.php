<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start(); 
}

class Router
{
    function middleware()
    {
        if((isset($_SESSION['connexion']) && $_SESSION['connexion']==false) || !isset($_SESSION['connexion']))
        {
            header("Location: /archiweb_2024_projets_gr02-main/webapp/login");
        }
    }

    function ManageRequest($request,$queryParams)// TRES IMPORTANT: La méthode prend en paramètre la route ET un tableau avec tous les paramètre GET
    {
       
        if($request == '/archiweb_2024_projets_gr02-main/webapp/')
        {
            require CONTROLLERSDIR.DS.'HomeController.php';
            $c = new HomeController();
            $c->viewStart();
        }
        else  if($request == '/archiweb_2024_projets_gr02-main/webapp/login')
        {
            require CONTROLLERSDIR.DS.'HomeController.php';
            $c = new HomeController();
            $c->viewLogin();
        }
        else  if($request == '/archiweb_2024_projets_gr02-main/webapp/register')
        {
            require CONTROLLERSDIR.DS.'HomeController.php';
            $c = new HomeController();
            $c->viewRegister();
        }

        else if($request == '/archiweb_2024_projets_gr02-main/webapp/logout')
        {
            $_SESSION['connexion'] = false;
            require CONTROLLERSDIR.DS.'HomeController.php';
            $c = new HomeController();
            $c->viewStart();
        }
        else if($request == '/archiweb_2024_projets_gr02-main/webapp/loginSubmit')
        {
            require CONTROLLERSDIR.DS.'LoginController.php';

            $email = $_POST['email'];
            $password = $_POST['password'];

            $c = new LoginController();
            $c->login($email,$password);
        }
        else if($request == '/archiweb_2024_projets_gr02-main/webapp/signinSubmit')
        {
            require CONTROLLERSDIR.DS.'LoginController.php';

            $name = $_POST['name'];
            $email = $_POST['email'];
            $pass1 = $_POST['pass1'];
            $pass2 = $_POST['pass2'];
            $country = $_POST['country'];
            $gender = $_POST['gender'];
            $condition = $_POST['condition'];
            
            $c = new LoginController();
            $c->signup($name,$email,$pass1,$pass2,$country,$gender,$condition);
        }
        else  if($request == '/archiweb_2024_projets_gr02-main/webapp/contact')
        {
            $this->middleware();
            require CONTROLLERSDIR.DS.'NutritionnisteController.php';
            $c = new NutritionnisteController();
            $c->view();
        }
        else  if($request == '/archiweb_2024_projets_gr02-main/webapp/calendrier')
        {
            $this->middleware();
            require CONTROLLERSDIR.DS.'UserController.php';
            $c = new UserController();
            $c->calendrier(1);
        }
        else  if($request == '/archiweb_2024_projets_gr02-main/webapp/consommations')
        {
            $this->middleware();
            require CONTROLLERSDIR.DS.'UserController.php';
            $c = new UserController();
            $c->consommations();
        }
        else  if($request == '/archiweb_2024_projets_gr02-main/webapp/ajouterRecette')
        {
            $this->middleware();
            require CONTROLLERSDIR.DS.'RecetteController.php';
            $c = new RecetteController();
            $c->ajouterRecetteForm();
        }
        else  if($request == '/archiweb_2024_projets_gr02-main/webapp/tendance')
        {
            $this->middleware();
            require CONTROLLERSDIR.DS.'RecetteController.php';
            $c = new RecetteController();
            $c->listeRecette();
        }
        else  if($request == '/archiweb_2024_projets_gr02-main/webapp/search')
        {
            $this->middleware();
            require CONTROLLERSDIR.DS.'RecetteController.php';
            $c = new RecetteController();
            $c->rechercherRecettes();
        }
        else  if($request == '/archiweb_2024_projets_gr02-main/webapp/searchFrigo')
        {
            $this->middleware();
            require CONTROLLERSDIR.DS.'RecetteController.php';
            $c = new RecetteController();
            $c->searchFrigo();
        }
        else  if($request == '/archiweb_2024_projets_gr02-main/webapp/liste')
        {
            $this->middleware();
            require CONTROLLERSDIR.DS.'RecetteController.php';
            $c = new RecetteController();
            $c->listeRecetteAvance($queryParams);
        }
        else if($request == '/archiweb_2024_projets_gr02-main/webapp/element')
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