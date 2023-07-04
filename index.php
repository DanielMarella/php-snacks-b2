<!-- Scrivi una funzione che fonde due array (aventi lo stesso numero di elementi) prendendo alternativamente gli elementi da uno e dall'altro
es. [a,b,c,d,e], [1,2,3,4,5] → [a,1,b,2,c,3,d,4,e,5]. -->


<?php 

$array1 = ['a','b','c','d','e'];
$array2 = [1,2,3,4,5];



    $array3 = [];
    for ($i=0; $i < count($array1) ; $i++) { 
        array_push($array3, $array1[$i], $array2[$i]);
    }

    var_dump($array3);


?>