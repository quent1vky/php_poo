<?php

require_once './modele/personnage.php'; 
require_once './vu/personnageView.php'; 

class PersonnageController {
    private $model;
    private $view;

    public function __construct() {
        $this->model = new Personnage("wil",1564156,"table");
        $this->view = new personnageView();
    }


    public function afficherPersonnage(){
        $this->view->infosPerso($this->model);
    }
}

?>
