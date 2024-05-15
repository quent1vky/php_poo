<?php

class PersonnageView{
    private $personnage;


    public function affForm(){
        ?>
        <form action="submit.php" method="post">
            <label for="name">Nom :</label>
            <input type="text" id="name" name="name"><br><br>
            <label for="age">Âge :</label>
            <input type="number" id="age" name="age"><br><br>
            <input type="submit" value="Envoyer">
        </form>
        <?php
    }

    public function infosPerso($perso){
        echo "Nom :" . $perso->getNom();
        echo "Pv :" . $perso->getPv();
        echo "Genre :" . $perso->getGenre();
    }
}

?>