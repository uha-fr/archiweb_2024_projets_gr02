<?php

class UserController
{
    function calendrier()
    {
        require VIEWSDIR.DS.'UserView.php';
        $v = new UserView();
        $html = $v->viewCalendrierHTML();

        echo $html;
        http_response_code(200);
    }

    function consommations()
    {
        require VIEWSDIR.DS.'UserView.php';
        $v = new UserView();
        $html = $v->viewConsoHTML();

        echo $html;
        http_response_code(200);
    }
}