<?php

class PersonnageView{
    private $personnage;

    public function infosPerso($perso){

        define("HOTE", "localhost");
        define("BD", "personnage");
        define("USER", "root");
        
        try {
            $bdd = new PDO('mysql:host='.HOTE.';dbname='.BD.';charset=utf8', USER, "");
        } catch (PDOException $e) {
            die('Erreur:'. $e->getMessage());
        }

        $sql = "SELECT * FROM personnage";
        $req = $bdd -> prepare($sql);
        $req -> execute();
        $donnees = $req -> fetchAll();

        foreach ($donnees as $d){
            $nom =  $d["nom"];
            $pv =  $d["pv"];
            $genre = $d["genre"];
        }

        echo "Nom :" . $nom . "<br>";
        echo "Pv :" . $pv . "<br>";
        echo "Genre :" . $genre . "<br>"; 
    }   


    public function ajouterPerso(){
        echo "<form action='/ajouter' method='post'>";
        echo "<label for='id'>ID :</label>";
        echo "<input type='text' id='id' name='id'><br><br>";
        echo "<label for='nom'>Nom :</label>";
        echo "<input type='text' id='nom' name='nom'><br><br>";
        echo "<label for='nom'>PV :</label>";
        echo "<input type='text' id='pv' name='pv'><br><br>";
        echo "<label for='nom'>Genre :</label>";
        echo "<input type='text' id='genre' name='genre'><br><br>";
        echo "<input type='submit' value='Envoyer'>";
        echo "</form>";
    }
}

?>