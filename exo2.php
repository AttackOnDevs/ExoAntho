<?php
function filter($filtre, $validation) {
    if (!is_string($validation) || strlen($validation) !== 1) {
        return false;
    }
    if (is_numeric($filtre)) {
        $filtre = strval($filtre);
    }
    
    if (!is_string($filtre)) {
        return false;
    }

    if (strpos($filtre, $validation) !== false) {
        return true;
    }

    return false;
    
}

var_dump(filter("Hello World", "o")); // true
var_dump(filter("Salut les gens", "i")); // false
var_dump(filter(12, "c")); // false
var_dump(filter(12, 2)); // true (je n'ai pas réussi celui la)
?>
