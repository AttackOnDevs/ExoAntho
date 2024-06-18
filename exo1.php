<?php
function average($a) {  
    if (!is_array($a) || count($a) === 0) {
        echo "ce n'est pas un tableau";
        return;
    }
    
    foreach ($a as $b) {
        if (!is_numeric($b)) {
            echo "ce ne sont pas que des nombres";
            return;
        }
    }
    
    $somme = array_sum($a);
    $count = count($a);
    return $somme / $count;
}

echo  average([12, 14, 16, 18]) . "<br>";
echo  average([12, "sept", 4, 8]) . "<br>";
echo average(13,15,18); //Je n'ai pas réussi a faire un message d'érreur pour celui la(a finir si j'ai le temps)
?>
