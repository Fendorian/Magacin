<?php

class PoslovnaLogika {
    private $_xmlData;
    function __construct()
    {
      $this->_xmlData = simplexml_load_file(".././klase/vrednostzaPL.xml") or die("XML nije pronadjen");
    }
    function ProveriGodinu($godina) {
        $uslovGodina = $this->_xmlData->uslov;
        if ((int)$godina > (int)$uslovGodina) {
            die ("Zao nam je, ali robu napravljene nakon $uslovGodina ne primamo!");
        }
    }
}
