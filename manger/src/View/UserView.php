<?php

class UserView
{

    function loadviewCalendrier()  
    {
        ob_start();
        require VIEWSDIR.DS.'Pages'.DS.'calendrierRepas.php';
        $out = ob_get_clean();
        return $out;
    }

    function loadviewConso()  
    {
        ob_start();
        require VIEWSDIR.DS.'Pages'.DS.'consommations.php';
        $out = ob_get_clean();
        return $out;
    }

    function viewCalendrierHTML()
    {
        $html = $this->loadviewCalendrier();
        return $html;
    }

    function viewConsoHTML()
    {
        $html = $this->loadviewConso();
        return $html;
    }
}