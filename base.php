<?php

/***
 * Connexion à la BD
 * 
 * © Victor Januel
 * Attention le fichier n'a pas été testé ;
 * (il peut présentée des erreurs de syntaxe).
 */



 define("HOTE", "localhost");
 define("BD", "personnage");
 define("USER", "root");
 
 try {
     $bdd = new PDO('mysql:host='.HOTE.';dbname='.BD.';charset=utf8', USER, "");
 } catch (PDOException $e) {
     die('Erreur:'. $e->getMessage());
 }
 

?>