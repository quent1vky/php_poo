<?php

require_once './modele/personnage.php'; 
require_once './vu/personnageView.php'; 

class PersonnageController {
    private $personnage;
    private $infosPersonnage;

    public function __construct() {
        $this->personnage = new Personnage(1,"unPerso",5,"unType");
        $this->infosPersonnage = new personnageView();
    }


    public function afficherPersonnage(){
        $this->infosPersonnage->infosPerso($this->personnage);
    }

    public function ajouterPersonnage(){
        echo "toto";
        $this->infosPersonnage->ajouterPerso();
    }
}

?>