<?php
$td=$_GET["td"];
$ts=$_GET["ts"];
$md=$_GET["md"];
$ms=$_GET["ms"];
$fd=$_GET["fd"];
$fs=$_GET["fs"];
$kd=$_GET["kd"];
$ks=$_GET["ks"];
$id=$_GET["id"];
$is=$_GET["is"];
$tad=$_GET["tad"];
$tas=$_GET["tas"];
$ipd=$_GET["ipd"];
$ips=$_GET["ips"];
$dd=$_GET["dd"];
$ds=$_GET["ds"];
$vd=$_GET["vd"];
$vs=$_GET["vs"];
$tp=$td*$ts+$md*$ms+$fd*$fs+$kd*$ks+$id*$is+$tad*$tas+$dd*$ds+$ips*$ipd+$vd*$vs;
$tsa=$ts+$ms+$fs+$ks+$is+$tas+$ds+$ips+$vs;
$sonuc=$tp/$tsa;
$bilgi;

echo "Sınavdan alınan net:$sonuc";


if ($sonuc>=85 && $sonuc<=100)  $bilgi="TAKDİR";
if ($sonuc>=70 && $sonuc<85)  $bilgi="TEŞEKKÜR";
if ($sonuc>=50 && $sonuc<70)  $bilgi="BELGE ALAMADINIZ";
if ($sonuc<50)  $bilgi="SINIF TEKRAR";

/*
if ($sonuc>=85) 
    $bilgi="TAKDİR";
         elseif ($sonuc>=70) 
              $bilgi="TEŞEKKÜR";
                 elseif($sonuc>=50)
                     $bilgi="BELGE ALAMADINIZ";
                         else 
                            $bilgi="SINIF TEKRARI";
*/
echo $bilgi;

?>