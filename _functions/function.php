<?php

/**
 * Permet de sécuriser une chaîne de caractères
 * 
 * @param $string
 * @return string
 */

function str_secur($string){
    return trim(htmlspecialchars($string));
}


/**
 * Debug plus lisible des différents variables
 * 
 * @param $var
 */

function debug($var){
    echo '<pre>';
    var_dump($var);
    echo '</pre>';
}