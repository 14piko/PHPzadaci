<?php

// stranica putem GET metode prima tri broja.
// ta tri broja smješta u indeksni niz naziva brojevi
// te ispisuje srednji element tog niza

//1.Način (Najduži)
$j=$_GET['b1'];
$k=$_GET['b2'];
$l=$_GET['b3'];

$brojevi=[];
$brojevi[]=$j;
$brojevi[]=$k;
$brojevi[]=$l;

echo $brojevi[1];

//2.Način (Bolji način)

/* $brojevi=[];
$brojevi[]=$_GET['b1'];
$brojevi[]=$_GET['b2'];
$brojevi[]=$_GET['b3'];

echo $brojevi[1];
*/

//3.Način (Najbolji način(brži))

/* $brojevi = [
    $_GET['b1'],
    $_GET['b2'],
    $_GET['b3']
];

echo $brojevi[1];
*/

?>

