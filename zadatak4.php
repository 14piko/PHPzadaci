<?php

// kreirajte indeksni niz sa 100 slučajnih brojeva između 5 i 10 
// ispišite sumu svih brojeva u nizu

$niz=[];
$sum=0;
for($i=0;$i<100;$i++){
    $niz[]=rand(5,10);
    $sum+= $niz[$i];
}
print_r($sum);

?>