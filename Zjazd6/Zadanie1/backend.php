<?php

class NoweAuto {

    public $modelAuta, $cenaWEuro, $kurs;

    public function __construct() {
        $this->modelAuta  = "LexusIS300";
        $this->cenaWEuro = 80000.0;
        $this->kurs = 4.50;
    }

    public function obliczCene() {
        return $this -> kurs*4.50;
    }
}
class AutoZDodatkami extends NoweAuto {

    public $alarm, $radio, $klimatyzacja;

    public function __construct() {
            parent::__construct();
            $this->alarm = 120;
            $this->radio = 90;
            $this->klimatyzacja = 500;
    }



    public function ObliczCene() {
        return $this->cenaWEuro * $this->kurs + $this->alarm + $this->radio + $this->klimatyzacja;
    }
}

class Ubezpieczenie extends AutoZDodatkami {
    public $wartoscUbezpieczenia = 0.1;
    public $lataPosiadaniaSamochodu = 7;

    public function __construct() {
        parent::__construct();
    }

    public function obliczCene() {
        return ($this->wartoscUbezpieczenia * (parent::obliczCene() * ((100-$this->lataPosiadaniaSamochodu)/100)));
    }
}

$ubezpieczenie = new Ubezpieczenie();

echo $ubezpieczenie->obliczCene();