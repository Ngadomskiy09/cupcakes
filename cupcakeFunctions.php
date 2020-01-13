<?php
// name function
function validName($string) {
    return ctype_alpha($string) AND !empty($string);
}
