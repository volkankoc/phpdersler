<?php
//fonksiyon tanımla ve kullanımı
/*Fonksiyonlar geriye değer dönüren ve döndürmeyen olarak ikiye ayrılır
* Fonksiyonlar çağrılmadığı sürece aktif olmazlar
*/


function mesaj()
{
    echo "HOŞGELDİNİZ";
    echo "Sitemizde güzel vakit geçirmeniz dileğiyle";
}
function notHesapla($n1,$n2)
{
    $sonuc=($n1+$n2)/2;
    return $sonuc;
}
function hesapla($vize,$final)
{
    $not=$vize*40/100+$final*60/100;
    return $not;
}
function ucgenalan($taban,$yukseklik)
{
    $sonuc=($taban*$yukseklik)/2;
    return $sonuc;
}
function topla($bas,$bit)
{
    $toplam;
    if ($bas<$bit)
    {  
        for ($i=$bas; $i<=$bit;$i++) 
        { 
        $toplam=$toplam+$i;
        }
    }
    else 
    {
        for ($i=$bas; $i>=$bit;$i--) 
        { 
        $toplam=$toplam+$i;
        }
    }
    return $toplam;
}
function yamuk($alt,$ust,$yuk)
{
    $sonuc=($alt+$ust)*$yuk/2;
    return $sonuc;
}

function diziyaz($dizi)
{
    foreach ($dizi as $value) {
       echo $value;
       echo "<hr>";
    }
}
$puanlar=array(88,25,36,36,98,60,80,90,100);
$meyve=array("elma","armut","kiraz","nar");
diziyaz($puanlar);
diziyaz($meyve);
?>