<?php
/**
 * @param $uri
 * @return array
 */
function getRoute($uri) {

    $routes = array(
        'index'              => array ('page' => 'index', 'title'   =>'Bienvenue sur notre home page'),
        'contactez-nous'     => array ('page' => 'contact', 'title' =>'Formulaire des contacts'),
        'liste des contacts' => array ('page' =>  'list', 'title'   =>'Liste des contact'),

    );


    $segments = explode('?', $uri );
    $pages = explode('/', $segments[0]);
    if (isset($routes[$pages[1]])){
        $index = $pages[1];
    }else{
        $index ="index";
    }
    $page = $routes[$index]['page'];
    $title = $routes[$index]['title'];
    $file = $page . '.php';

    return array(
        'page' => $page,
        'title' => $title,
        'file' => $file,
    );
}




