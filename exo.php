/* <!-- <?php -->


echo somme(10,50,20);
function Somme($nbr1, $nbr2, $nbr3):int{


return $nbr1+$nbr2+$nbr3;

};

?>  -->

<?php


echo moyenne(10,50,20);
function moyenne($nbr1, $nbr2, $nbr3):int{


return $nbr1+$nbr2+$nbr3/3;

};

?>
 */


<?php

$tab = [];
$tab2 = array();
$tab[0] = 'mathieu';
$tab2[0] = 'adrar';

echo $tab2[0];


$tab3 = ['nom'=>'mithridate','prenom','age'];
$tab3 ['prenom']= 'math';
$tab3 ['age']= 42 ;
$tab3 ['telephone']= '0648185118';

foreach ($tab3 as $key => $value) {
    echo 'Le '.$key. ' : '.$value.'<br>';
}

?>