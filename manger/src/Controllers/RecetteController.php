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

    function listeRecette()
    {
        require MODELSDIR.DS.'RecetteModel.php';
        $m = new RecetteModel();
        $Products = $m->getall();

        require VIEWSDIR.DS.'RecetteView.php';
        $v = new RecetteView();
        $html = $v->viewHTML($Products);

        echo $html;
        http_response_code(200);
    }
}