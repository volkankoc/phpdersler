<?php 
$s1=$_GET["s1"];
$s2=$_GET["s2"];
$s3=$_GET["s3"];
$s4=$_GET["s4"];

$puan=0;
if ($s1=="Paris") $puan+=25; // $puam=$puan+25
if ($s2=="Kocaeli") $puan+=25; // $puam=$puan+25
if ($s3=="Düzce") $puan+=25; // $puam=$puan+25
if ($s4=="Rize") $puan+=25; // $puam=$puan+25
echo "Sınavdan alınan toplam puan=$puan";
?>