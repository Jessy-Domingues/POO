<?php
namespace Tutoriel;

class Archer extends Personnage{

    public $vie = 40;

    public function attaque($cible){
        // attaquant c'est $this
        // défenseur c'est $cible
        $cible->vie -= $this->atk;
        parent::attaque($cible);
        $cible->empecher_negatif();
    }


}