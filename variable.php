<?php

$nbr1 = 10;
echo $nbr1 ."<br>";
$nbr2 = 13;
echo $nbr2 ."<br>";

$nbr2 = 50;
$nbr1 = 26;
// $nbr1 = $nbr2;

echo ''.$nbr1.' '.$nbr2.'' ."<br>";


testNbr(10,50);
function testNbr($nbr1, $nbr2){

if($nbr1>$nbr2){
    echo 'le nombre 1 est le plus grand';
}
else if($nbr1==$nbr2){
    echo 'les nombres sont identiques';

}
else{
    echo 'le nombre 2 est le plus grand';
}

}
?>