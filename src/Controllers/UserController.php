<?php

class UserController
{
    function calendrier($idUser)
    {
        require MODELSDIR.DS.'UserModel.php';
        $m = new UserModel();
        $calendrier = $m->calendrier($idUser);

        require VIEWSDIR.DS.'UserView.php';
        $v = new UserView();
        $html = $v->viewCalendrierHTML($calendrier);

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