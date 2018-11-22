<?php
$taban=$_GET["taban"];//get ile kullanıcıdan gelen veri alınıp değişkene aktarıldı.
$h=$_GET["h"];//get ile kullanıcıdan gelen veri alınıp değişkene aktarıldı.

echo ucgenhesapla($taban,$h);


function ucgenhesapla($t1,$y1)
{
    $alan=$t1*$y1/2;
    return $alan;
}




?>