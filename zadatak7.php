<?php

// Kreirajte indeksni niz s 5 elemenata koji su 
// asocijativni nizovi s ključevim a i b. 
// Vrijednosti za ključeve odaberite sami

$a=[
    'clan'  => 
        [
            'ime' => 'Mirko',
            'prezime' => 'Ereš',
            'dob' => 23, 
            'nadimak' => 'Piko',
            'spol' => 'M'
        ],
        
$b=[
    'riba'  => 
        [
            'naziv' => 'Šaran',
            'pocetaklovostaja' => '01-05',
            'krajlovostaja' => '31-05', 
            'opis' => 'Jaka ljuska,veoma brza riba,brkovi i velika usta',
            'rijeka' => 'Dunav'
        ],
]
    ];


echo $a['clan']['nadimak'];
echo '<hr />';
echo $b['riba']['naziv'];
echo '<hr />';
echo $b['riba']['pocetaklovostaja'] , ' - ' , $b['riba']['krajlovostaja'];

?>