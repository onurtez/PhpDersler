<?php
    /*
     Bu kod makale niteliğinde, php ile bot yapma anlatımı için oluşturulmuştur.
     */

    $urunLinki = "https://www.oyunparam.com/Rust.html";

    $ch = curl_init(); // Curl yi aktif eder yada tanımlar.
    curl_setopt($ch, CURLOPT_URL, $urunLinki); //Ziyaretr edilecek Url
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); //Aktarımı direk yazmak yerine bir değişken olarak diziyle curl_exec() ten döndermek için kullanılır. TRUE ve FALSE değeri alır.
    $cikti = curl_exec($ch); //İstek sonucu alıyoruz
    curl_close($ch); //Servisi durdurun

    //Curl ile çektiğimiz verileri analiz ediyoruz

    //1 Ürün adını arama
    $desen = '@<span itemprop="name" class="urunAdi">(.*?)</span>@si';
    //preg_match_all 3 parametre alaır 1. parametre pattern (desen) Aranacak ifadeleri belirleme 2.paremetre vurl ile gelen datalar. 3. parametre analiz edilmiş çıktı
    preg_match_all($desen,$cikti,$urunAdi);
    echo "Ürün Adı : {$urunAdi[0][0]} <br>"; //Ekrana Yazdıralım


    $desen = '@<span itemprop="availability" href="http://schema.org/InStock">(.*?)</span>@si';
    preg_match_all($desen,$cikti,$stokDurum);
    echo "Stok Durumu : {$stokDurum[0][0]} <br>";

    $desen = '@<span class="price urunFiyati" itemprop="price">(.*?)<i class="fa fa-try"></i> </span>@si';
    preg_match_all($desen,$cikti,$fiyat);
    echo "Fiyatı : {$fiyat[0][0]} <br>";

    $desen = '@<a href="/upload/urunResim/600x600/(.*?)"@si';
    preg_match_all($desen, $cikti,$resim);
    $resim = "https://www.oyunparam.com//upload/urunResim/600x600/{$resim[1][0]}";
    echo "Ürün Resmi :  {$resim} <br>";
    echo  "<img src='{$resim}' />";

