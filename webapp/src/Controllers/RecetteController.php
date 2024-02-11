<?php

class RecetteController
{
    function ajouterRecetteForm()
    {
        require VIEWSDIR.DS.'RecetteView.php';
        $v = new RecetteView();
        $html = $v->viewAddHTML();

        echo $html;
        http_response_code(200);
    }

    function rechercherRecettes()
    {
        require VIEWSDIR.DS.'RecetteView.php';
        $v = new RecetteView();
        $html = $v->searchView();

        echo $html;
        http_response_code(200);
    }

    /*function listeRecette()
    {
        require MODELSDIR.DS.'RecetteModel.php';
        $m = new RecetteModel();
        $Products = $m->getall();

        require VIEWSDIR.DS.'RecetteView.php';
        $v = new RecetteView();
        $html = $v->viewHTML($Products);

        echo $html;
        http_response_code(200);
    }*/  

    function listeRecette()
    {
        require MODELSDIR.DS.'RecettesModel.php';
        $m = new RecettesModel();
        $Recette = $m->getAllRecette();

        require VIEWSDIR.DS.'RecetteView.php';
        $v = new RecetteView();
        $html = $v->viewHTML($Recette);

        echo $html;
        http_response_code(200);
    }  

    function listeRecetteAvance($queryParams)
    {
        require MODELSDIR.DS.'RecettesModel.php';
        $m = new RecettesModel();
        $Recette = $m->getRecetteAvance($queryParams);

        require VIEWSDIR.DS.'RecetteView.php';
        $v = new RecetteView();
        $html = $v->viewHTML($Recette);

        echo $html;
        http_response_code(200);
    }  

    function searchFrigo()
    {
        require VIEWSDIR.DS.'RecetteView.php';
        $v = new RecetteView();
        $html = $v->viewFrigo();

        echo $html;
        http_response_code(200);
    }  

}