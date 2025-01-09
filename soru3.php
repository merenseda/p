<?php

$sayi1 = rand(1, 100);
$sayi2 = rand(1, 100);


$baslangic = min($sayi1, $sayi2);
$bitis = max($sayi1, $sayi2);


$toplam = 0;
for ($i = $baslangic + 1; $i < $bitis; $i++) {
    $toplam += $i;
}

echo "Üretilen Sayılar: $sayi1 ve $sayi2<br>";
echo "$baslangic ile $bitis arasındaki sayıların toplamı: $toplam";
?>
