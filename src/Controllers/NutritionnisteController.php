<?php

class NutritionnisteController
{
    function view()
    {
        require VIEWSDIR.DS.'ContactNutriView.php';
        $v = new ContactNutriView();
        $html = $v->viewHTML();

        echo $html;
        http_response_code(200);
    }
}