<?php

class ContactNutriView
{

    function loadview()  
    {
        ob_start();
        require VIEWSDIR.DS.'Pages'.DS.'contactNutri.php';
        $out = ob_get_clean();
        return $out;
    }

    function viewHTML()
    {
        $html = $this->loadview();
        return $html;
    }
}