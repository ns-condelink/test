<?php

echo add(7, 9);
echo sub(9,6);
echo mul(9,6);
// add function
function add($x, $y){
    $c = $x + $y;
    return $c;
}
function sub($x, $y){
    $c = $x - $y;
    return $c;
}
function mul($x, $y){
    $c = $x*$y;
    return $c;
}

?>