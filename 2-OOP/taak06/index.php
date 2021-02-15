<?php
class Robot {
    public $naam;
    public $geluid;
    public $voortstuwing;

    function getSound($beep){
        $this->geluid = $beep;
    }
}
 $wally = new Robot();
 $wolly = new Robot();
 $wally->getSound('beep');
 echo $wally->geluid;
 $wally->naam = 'wal-e';
 $wally->geluid = 'beepboop';
 $wally->voortstuwing = 'rollend';
 $wolly->naam = 'wol-e';
 $wolly->geluid = 'boopbeep';
 $wolly->voortstuwing = 'lopend';
?>