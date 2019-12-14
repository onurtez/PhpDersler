<?php
session_start();
var_dump(isset($_SESSION['ad_soyad']));


$_SESSION['ad_soyad'] = 'Onur TEZ';
if (isset($_SESSION['ad_soyad'])){
    echo $_SESSION['ad_soyad'];
}

echo "<br>";

$_SESSION['oturum'] = array("oturum" => True, "kadi"=>"onur", "girisZamani" => "2019-10-11 23:33:22");
print_r($_SESSION['oturum']);
echo "<br>";

$_SESSION['varlik'] = 'Selam Dünya !';//varlik adında bir session oluşturuk

unset($_SESSION['varlik']); // Sildik

//Kontrol ediyoruz, eğer varsa yazacak yokas artık session yok diye hata verecel
if (isset($_SESSION['varlik'])){
    echo $_SESSION['varlik'];
}else{
    echo "Session silinmiş şuan yok!";
}
