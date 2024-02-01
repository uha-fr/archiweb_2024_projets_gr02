<?php

class RecetteView
{

    function loadviewAdd()  
    {
        ob_start();
        require VIEWSDIR.DS.'Pages'.DS.'ajouterRecette.php';
        $out = ob_get_clean();
        return $out;
    }

    function viewAddHTML()
    {
        $html = $this->loadviewAdd();
        return $html;
    }

    function loadviewcontent($Products)  
    {
        ob_start();
        require VIEWSDIR.DS.'Pages'.DS.'listeRecette.php';
        $out = ob_get_clean();
        return $out;
    }

    function viewHTML($Products)
    {
        $html = $this->loadviewcontent($Products);
        return $html;
    }
}