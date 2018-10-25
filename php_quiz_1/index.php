<?php

//Soru 1 doğum tarihine göre yaş hesaplayıp ehliyet durumunu sorgulayan program
function yashesapla($tarih)
{
    $sonuc=2018-$tarih;
    return $sonuc;
}

$dtarih=1985;

if (yashesapla($dtarih)>=18) {
    echo "ehliyet alabilir";
}

//Soru 2 bir dizinin içinde var olan bir elemanın kaç adet olduğunu bulan program
$meyve=array("elma","elma","nar","elma","armut","kiraz","çilek","nar","elma");

function meyvebul($dizi)
{
    $sayac=0;
    foreach ($dizi as $value) {
        if ($value=="elma")
        {
            $sayac++;
        }
    }
    return $sayac;
}
echo "<hr>";
echo meyvebul($meyve);


?>