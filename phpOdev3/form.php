<?php

$number = $_POST["number"];

function enYakinUceBolunen($sayi) {
    return ceil($sayi / 3) * 3;
}


if($number == ""){
        echo"Lütfen bir sayı giriniz";
    }
    elseif($number %3 ==0){
        echo"girdiğiniz sayı doğru";
    }

    else {
        $enYakinUceBolunen = enYakinUceBolunen($number);
        echo "Girdiğiniz sayı 3'e bölünemez. Bölünebilecek ilk sayı: $enYakinUceBolunen";
    }
?>