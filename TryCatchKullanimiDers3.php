<?php
/*
        Örnek 1
        Sabit bir sayı if koşuluna sokulacak ve koşul olumsuz olacak. Olumsuz olan sonuç için ekrana bir hata mesajı basılacak.
 */

$birSayiGirin = 55;

try {

    if ( intval($birSayiGirin) > 5 )
        throw new exception(' Sayı istene küçük olursa bu hata mesajını bas<br> ');
    else
        echo '<b>Tebrikler, sorun yok. <br></b>';

} catch (Exception $hataMesaji) {
    echo "<b>Ups Hata Oluştı : </b>" . $hataMesaji->getMessage();
}


$adin = "Onur";
/*
        Örnek 2
        Sabit bir sayı if koşuluna sokulacak ve koşuş uyuşacak hata alınmayacak
 */

try {

    if ( $adin != "Onur" )
        throw new exception('Adın onur değilse hata alacaksın!<br>');
    else
        echo 'Tebrikler, Değer Onur<br>';

} catch (Exception $e) {
    echo "<b>Ups Hata Oluştı : </b>" . $e->getMessage();
}

