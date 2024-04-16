<?php

$chemin_courant='./';

//utilise glob() pour obtenir la liste des fichier et 
$element=glob($chemin_courant.'*',GLOB_MARK);

//affiche les élements du répertoire courant
foreach($element as $element){
    echo basename($element) . "<br>";
}
?>

 <!-- flag.php   -->
