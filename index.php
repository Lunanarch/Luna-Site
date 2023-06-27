<?php
// Include des variables

include_once '_config/config.php';
// include_once '_config/db.php';

include_once '_functions/function.php';


//Définition de la page courante
if (isset($_GET['page']) AND !empty($_GET['page'])){
    $page = (strtolower($_GET['page'])); //HOME
} else{
    $page = WEBSITE_DEFAULTPAGE;
}

$allPages = scandir('controllers/');

if (in_array($page.'_controller.php', $allPages)){
    // Inclusion de la page
    include_once 'models/'.$page.'_model.php';
    include_once 'controllers/'.$page.'_controller.php';
    include_once 'views/'.$page.'_view.php';
    
} else{
    // Retour d'une erreur

    include_once '404';
}

