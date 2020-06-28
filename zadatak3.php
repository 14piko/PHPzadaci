<?php

//kreirajte indeksni niz s 100 slučajnih brojeva između 5 i 10.

$niz=[];
// niz do 100
for($i=0;$i<100;$i++){
    $niz[]=rand(5,10);
}
print_r($niz);

?>