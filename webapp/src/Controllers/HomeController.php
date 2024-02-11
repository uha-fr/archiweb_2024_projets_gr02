<?php

class HomeController
{
    function viewStart()
    {
        require VIEWSDIR.DS.'HomeView.php';
        $v = new HomeView();
        $html = $v->viewStartHTML();

        echo $html;
        http_response_code(200);
    }

    function viewLogin()
    {
        require VIEWSDIR.DS.'HomeView.php';
        $v = new HomeView();
        $html = $v->viewLoginHTML();

        echo $html;
        http_response_code(200);
    }

    function viewRegister()
    {
        require VIEWSDIR.DS.'HomeView.php';
        $v = new HomeView();
        $html = $v->viewRegisterHTML();

        echo $html;
        http_response_code(200);
    } 
}