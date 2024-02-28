<?php

    include "Alunno.php";

    
    $arrayAlunni = [
        new Alunno("davide", "xie", 21),
        new Alunno("tommaso", "lanini", 19),
        new Alunno("vincenzo", "langone", 20)
    ];

    foreach($arrayAlunni as $key) {
        echo $key->toString();
    }
?>