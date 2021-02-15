<?php
class Scooter {
    public $kleur;
    public $merk;
    public $inhoudTank;

    function checkInhoud(){ 
        if($this->inhoudtank == 5){
            echo 'De tank is vol!';
        }
        else{
            echo 'de tank is niet vol';
        }
    }
}

 $piago = new Scooter();
 $peugeot = new Scooter();
 $piago->merk = 'piago';
 $piago->kleur = 'rood';
 $piago->inhoudtankt = '6';
 $peugeot->merk = 'peugeot';
 $peugeot->kleur = 'zwart';
 $peugeot->merk = '7';
 ?>
