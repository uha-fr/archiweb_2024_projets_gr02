<?php

class HomeView
{

    //View start
    function loadStart()  
    {
        ob_start();
        require VIEWSDIR.DS.'Pages'.DS.'home.php';
        $out = ob_get_clean();
        return $out;
    }
    function viewStartHTML()
    {
        $html = $this->loadStart();
        return $html;
    }

    //View login
    function loadLogin()  
    {
        ob_start();
        require VIEWSDIR.DS.'Pages'.DS.'login.php';
        $out = ob_get_clean();
        return $out;
    }
    function viewLoginHTML()
    {
        $html = $this->loadLogin();
        return $html;
    }

    //View register
    function loadRegister()  
    {
        ob_start();
        require VIEWSDIR.DS.'Pages'.DS.'register.php';
        $out = ob_get_clean();
        return $out;
    }
    function viewRegisterHTML()
    {
        $html = $this->loadRegister();
        return $html;
    }
 
}