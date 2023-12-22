<?php 

class Hesap {
    public $kenar1;
    public $kenar2;
    public $taban;
    public $yukseklik;
}

class Ucgen extends Hesap{
    public function UcgenAlanHesapla($taban, $yukseklik){
            return ($taban * $yukseklik) /2;
    }

    public function UcgenCevreHesapla($kenar1, $kenar2, $taban){
        return $kenar1 + $kenar2 + $taban;
    }

}

class Kare extends Hesap{
    public function KareAlanHesapla($kenar1){
        return $kenar1 * $kenar1;
    }

    public function KareCevreHesapla($kenar1){
      return 4 * $kenar1;   
    }
}

class Dikdortgen extends Hesap{
    public function DikdortgenAlanHesapla($kenar1, $kenar2){
        return $kenar1 * $kenar2;
    }

    public function DikdortgenCevreHesapla($kenar1, $kenar2){
        return ($kenar1 + $kenar2) * 2;
    }
}
?>