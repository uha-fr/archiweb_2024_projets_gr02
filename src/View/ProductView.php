<?php

class ProductView
{

    function loadviewcontent($Products,$ressource, $file)  
    {
        ob_start();
        require VIEWSDIR.DS.'Pages'.DS.'home.php';
        $out = ob_get_clean();
        return $out;
    }

    function listall($Products)
    {
        $html = $this->loadviewcontent($Products,'Product', 'listall.php');
        return $html;
    }

    function listone($Products)
    {
        $html = $this->loadviewcontent($Products,'Product', 'listone.php');
        return $html;
    }
}