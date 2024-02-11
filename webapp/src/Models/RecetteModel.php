<?php 

class RecetteModel
{
    function getAll() {
        $post = [
            'title' => "Pomme",
            'ingr' => "Une belle pomme",
            'time' => "15",
            'img' => "menu-item-1.png",
        ];
    
        $posts[] = $post;
    
        $post = [
            'title' => "Poire",
            'ingr' => "Une belle poire",
            'time' => "18",
            'img' => "menu-item-2.png",
        ];
    
        $posts[] = $post;
    
        $post = [
            'title' => "Banane",
            'ingr' => "Une belle banane",
            'time' => "5",
            'img' => "menu-item-3.png",
        ];
    
        $posts[] = $post;
    
        $post = [
            'title' => "Fraise",
            'ingr' => "Une belle fraise",
            'time' => "10",
            'img' => "menu-item-4.png",
        ];
    
        $posts[] = $post;

        $post = [
            'title' => "Pizza",
            'ingr' => "Une belle pizza",
            'time' => "13",
            'img' => "menu-item-5.png",
        ];
    
        $posts[] = $post;

        $post = [
            'title' => "Miam",
            'ingr' => "Une belle régalade",
            'time' => "122",
            'img' => "menu-item-6.png",
        ];
    
        $posts[] = $post;
    
        return $posts;
    }

    function getone($id) {

        $posts = [
            'title' => "Pomme",
            'descr' => "Une belle pomme",
            'price' => $id,
        ];

        return $posts;
    }
}



