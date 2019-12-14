<?php
$suankiZaman = date("Y-m-d H:i:s"); //Şuan sistem zamanı
$eskiBiTarih = "2019-11-05 15:22:00"; // Hesaplammak için geri bi tarih


$suankiZamanGuncelle = strtotime($suankiZaman); //strtotime tipine çeviriyoruz
$eskiBiTarihGuncelle = strtotime($eskiBiTarih); //strtotime tipine çeviriyoruz

$fark =  $suankiZamanGuncelle - $eskiBiTarihGuncelle;

$gecenGunSayisi = floor($fark / (60 * 60 * 24)); //60 sn 60 dk 24 gün
$gecenSaatSayisi = floor($fark / (60 * 60 )); //60 sn 60 dk
$gecenDakikaSayisi = floor($fark / (60 ));//60sn
$gecenSaniyeSayisi = $fark;

echo "$suankiZaman Tarihinden $eskiBiTarih Tarihine <br> Gün : $gecenGunSayisi Saat : $gecenSaatSayisi Dakika : $gecenSaatSayisi ve Saniye $gecenSaniyeSayisi geçmiştir. ";