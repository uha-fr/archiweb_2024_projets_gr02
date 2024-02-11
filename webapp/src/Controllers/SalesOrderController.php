<?php

class SalesOrderController
{
    function list()
    {
        
        require MODELSDIR.DS.'SalesOrderModel.php';
        $m = new SalesOrderModel();
        $Orders = $m->getall();

        require VIEWSDIR.DS.'SalesOrderView.php';
        $v = new ProductView();
        $html = $v->listall($Products);

        echo $html;
        http_response_code(200);
    }

    function view($id)
    {
        
        require MODELSDIR.DS.'SalesOrderModel.php';
        $m = new SalesOrderModel();
        $Orders = $m->getone($id);

        require VIEWSDIR.DS.'SalesOrderView.php';
        $v = new SalesOrderView();
        $html = $v->listone($Products);

        echo $html;
        http_response_code(200);
    }
}