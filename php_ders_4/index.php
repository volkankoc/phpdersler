<?php
$filename="not.txt";
$mode="r";
$dosya=fopen($filename,$mode);
//dosya okumak için açıldı
//şart sağlanıyorsa döngü tekrar eder
//dosya sonuna gelmediysen okuma devam et
$toplam=0;
$sayac=0;
$hata=0;
while (!feof($dosya)) 
{
   $bilgi=fgets($dosya);//bir satır okur
    //Gelen bilgideki boşlukları sil ve sayısal bir değer olup
    //olmaaığını kontrol et
   if(is_numeric(trim($bilgi)))
   {
     
        $toplam=$toplam+$bilgi;
        $sayac++;
   }
   else 
   {
        $hata++;
   }


}
$ortalama=$toplam/$sayac;
echo "Ortalama=$ortalama <br>";
echo "Notlar bilgisinde $hata adet hatalı not bilgisi bulundu ";
fclose($dosya);



?>