<?php
$bas=$_GET["bas"];//get ile kullanıcıdan gelen veri alınıp değişkene aktarıldı.
$bit=$_GET["bit"];//get ile kullanıcıdan gelen veri alınıp değişkene aktarıldı.

for ($i=1; $i<=10 ; $i++)
{ 
    echo sayiuret($bas,$bit);
    echo "<hr>";
   
}



function sayiuret($s1,$s2)
{
    $sayi=rand($s1,$s2);
    return $sayi;
}


?>