<?php

// kreirajte indeksni niz s 100 slučajnih brojeva 
// između 3 i 13 
// ispišite samo parne brojeve

$niz=[];
for($i=0;$i<100;$i++){
    $niz[]=rand(3,13);
}

foreach($niz as $broj){
    if($broj%2!=0){
        continue;
    }
    echo $broj . '<br>';

}

?>