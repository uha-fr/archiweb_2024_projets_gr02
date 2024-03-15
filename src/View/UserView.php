<?php

class UserView
{

    function loadviewCalendrier($calendrier)  
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

    function viewCalendrierHTML($calendrier)
    {
        $html = $this->loadviewCalendrier($calendrier);
        return $html;
    }

    function viewConsoHTML()
    {
        $html = $this->loadviewConso();
        return $html;
    }
}