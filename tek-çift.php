<?php

$sayi1 = rand(0, 100);  
$sayi2 = rand(0, 100);

if ($sayi1 >= $sayi2) {
    $buyukSayi = $sayi1;
    $kucukSayi = $sayi2;
} 
else 
{
    $buyukSayi = $sayi2;
    $kucukSayi = $sayi1;
}


$sonuc = $buyukSayi - $kucukSayi;


if ($sonuc % 2 == 0) {
    echo "Sayı 1: $sayi1, Sayı 2: $sayi2, Sonuç: $sonuc -> Çift sayıdır.";
} 
else 
{
    echo "Sayı 1: $sayi1, Sayı 2: $sayi2, Sonuç: $sonuc -> Tek sayıdır.";
}

?>
