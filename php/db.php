<?php

session_start();
/*Guardamos todo en una variable para facilidad de manipulación*/
$conn = mysqli_connect(
    'localhost',
    'root',
    '',
    'proyecto'
);


/*Comprobar si jala la db, para esto debe de estra creada y prendido apache y mysql de xammp o wammp

if(isset($conn))
{
    echo 'db is connection';
};
?>

*/