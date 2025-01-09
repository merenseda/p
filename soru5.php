<?php

$dogru_kullanici = "admin";
$dogru_sifre = "12345";


$kullanici = "admin"; 
$sifre = "12345";    

if ($kullanici === $dogru_kullanici && $sifre === $dogru_sifre) {
    echo "Giriş başarılı!";
} else {
    echo "Giriş başarısız. Lütfen kullanıcı adı ve şifrenizi kontrol edin.";
}
?>
