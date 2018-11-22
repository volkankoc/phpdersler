<?php
$filename="not.txt";
$mode="r";
$dosya=fopen($filename,$mode);
//dosya okumak için açıldı
//şart sağlanıyorsa döngü tekrar eder
//dosya sonuna gelmediysen okuma devam et
$bilgiler=array();

while (!feof($dosya)) 
{
   $bilgi=fgets($dosya);//bir satır okur
   array_push($bilgiler,trim($bilgi));

}

fclose($dosya);
print_r($bilgiler);


?>