<?php
// name function
function validName($string) {
    return ctype_alpha($string) AND !empty($string);
}
function check($order){
    if (!isset($order)) {
        unset($_SESSION['flavors']);
        return false;
    }
    foreach($order as $flavor){
        if(!array_key_exists($flavor,$_SESSION['flavors'])){
            unset($_SESSION['flavors']);
            return false;
        }
    }
    unset($_SESSION['flavors']);
    return true;
}