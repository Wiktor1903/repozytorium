<?php
function NWD($a,$b){
    while($b != 0){
        $temp = $b;
        $b = $a%$b;
        $a = $temp;
    }
    return $a;
}

function suma($liczba){
    $suma = 0;
    while($liczba > 0){
        $suma += $liczba%10;
        $liczba /10;
    }
    return $suma;
}
?>