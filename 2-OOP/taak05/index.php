<?php
class Lamp {
    public $kleur;
    public $helderheid;
    public $isAan;

    function setStatus($status){
        $this->isAan = $status;
    }
}
 $woonkamerlamp = new Lamp();
 $keukenlamp = new Lamp();
 $woonkamerlamp->setStatus('status');
 echo $woonkamerlamp->isAan;
 $woonkamerlamp->kleur = 'geel';
 $woonkamerlamp->helderheid = 'zacht';
 $woonkamerlamp->isAan = 'true';
 $keukenlamp->kleur = 'wit';
 $keukenlamp->helderheid = 'vel';
 $keukenlamp->isAan = 'false';
?>