<?php

$dogru_kullanici = "admin";
$dogru_sifre = "12345";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $kullanici = $_POST["kullanici"];
    $sifre = $_POST["sifre"];


    if ($kullanici === $dogru_kullanici && $sifre === $dogru_sifre) {
        echo "Giriş başarılı!";
    } else {
        echo "Giriş başarısız. Lütfen kullanıcı adı ve şifrenizi kontrol edin.";
    }
}
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giriş Formu</title>
</head>
<body>
    <h2>Giriş Yap</h2>
    <form method="post" action="">
        <label for="kullanici">Kullanıcı Adı:</label><br>
        <input type="text" id="kullanici" name="kullanici" required><br><br>
        
        <label for="sifre">Şifre:</label><br>
        <input type="password" id="sifre" name="sifre" required><br><br>
        
        <button type="submit">Giriş Yap</button>
    </form>
</body>
</html>
