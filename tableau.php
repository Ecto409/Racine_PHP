<?php

$noms = array('Marie', 'Mathieu' , 'Robert');
$personne = array('nom' => 'Nebra' , 'prenom' => 'Mathieu' , 'age' => '99');

foreach ($personne as $libelle => $detail)
{
    echo '<p>' . $libelle . ' vaut ' . $detail . '</p>';
}

?>