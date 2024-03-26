<?php

class RecetteView
{

    function loadSearchView()  
    {
        ob_start();
        require VIEWSDIR.DS.'Pages'.DS.'rechercherRecette.php';
        $out = ob_get_clean();
        return $out;
    }

    function searchView()
    {
        $html = $this->loadSearchView();
        return $html;
    }

    function loadviewAdd($ingredients)  
    {
        ob_start();
        require VIEWSDIR.DS.'Pages'.DS.'ajouterRecette.php';
        $out = ob_get_clean();
        return $out;
    }

    function viewAddHTML($ingredients)
    {
        $html = $this->loadviewAdd($ingredients);
        return $html;
    }

    function loadviewcontent($Recette)  
    {
        ob_start();
        require VIEWSDIR.DS.'Pages'.DS.'listeRecette.php';
        $out = ob_get_clean();
        return $out;
    }

    function viewHTML($Recette)
    {
        $html = $this->loadviewcontent($Recette);
        return $html;
    }


    function loadviewfrigo()  
    {
        ob_start();
        require VIEWSDIR.DS.'Pages'.DS.'rechercherRecetteFrigo.php';
        $out = ob_get_clean();
        return $out;
    }

    function viewFrigo()
    {
        $html = $this->loadviewfrigo();
        return $html;
    }
}