<?php

/***
 * Connexion à la BD
 * 
 * © Victor Januel
 * Attention le fichier n'a pas été testé ;
 * (il peut présentée des erreurs de syntaxe).
 */



define ($HOTE, "localhost");
define ($BD, "ma_jolie_bd");
define ($USER, "mon_utilisateur_prefere");
define ($PASS, "mon_pass_*****");

$bd = new PDO("mysql:dbname=".$BD.";host=".$HOTE.";",$USER, $PASSWORD)

?>